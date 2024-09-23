<?php
class MAdmin extends CI_Model{

function __construct(){
	parent::__construct();
	$v_date = date("Y-m-d H:i:s");
	$username=$this->session->userdata('username');
}

function get_admin($idadmin){
	$data = array();
	$options = array('idadmin' => $idadmin);
	$sql = $this->db->get_where('tb_admin',$options,1);
		if ($sql->num_rows() > 0){
			$data = $sql->row_array();
		}
	$sql->free_result();
	return $data;
}


function getAll_admin(){
	$this->db->order_by('name', 'ASC');
	$sql = $this->db->get('tb_admin');
	$data = array();
	if ($sql->num_rows() > 0){
		foreach ($sql->result_array() as $row){
			$data[] = $row;
		}
	}
	$sql-> free_result();
	return $data;
}

function getAll_penyiar(){
	$this->db->select('a.*');
	$this->db->from('tb_admin a');
	// $this->db->where('role', "Penyiar");
	// $this->db->or_where('role', "Kontributor");
	$this->db->order_by('name', 'ASC');
	$data = array();
	$sql = $this->db->get();
	if ($sql->num_rows() > 0){
		foreach ($sql->result_array() as $row){
			$data[] = $row;
		}
	}
	$sql-> free_result();
	return $data;
}


function add_admin(){
	$v_date = date('Y-m-d H:i:s');
	$username = $this->session-> userdata('username');
	$sql = 'insert into tb_admin(role,name,username,email,password,insertedby,insertedon,updatedby,updatedon)  values(?,?,?,?,?,?,?,?,?)';
	$this->db->query($sql, array($_POST['role'],$_POST['name'],$_POST['username'],$_POST['email'],MD5($_POST['password']),$username,$v_date,$username,$v_date));
}


function update_admin(){
	$v_date = date('Y-m-d H:i:s');
	$username = $this->session-> userdata('username');
	if ($_POST['password']!=""){
		$sql = 'update tb_admin set idadmin=?,role=?,name=?,username=?,email=?,password=?,updatedby=?,updatedon=? where idadmin=? ';
		$this->db->query($sql, array($_POST['idadmin'],$_POST['role'],$_POST['name'],$_POST['username'],$_POST['email'],MD5($_POST['password']),$username,$v_date,$_POST['idadmin']));
	}else{
		$sql = 'update tb_admin set idadmin=?,role=?,name=?,username=?,email=?,updatedby=?,updatedon=? where idadmin=? ';
		$this->db->query($sql, array($_POST['idadmin'],$_POST['role'],$_POST['name'],$_POST['username'],$_POST['email'],$username,$v_date,$_POST['idadmin']));
	}
}


function delete_admin(){
	$this->db->where('idadmin', $_POST['idadmin']);
	$this->db->delete('tb_admin');
}

function check_username(){
	$valid=0;
	$sql = "select role, name, username, email, password from tb_admin where username=? and password=?";
	$Q =$this->db->query($sql, array($_POST['username'],md5($_POST['password'])));
	if ($Q->num_rows() > 0){
		foreach ($Q->result_array() as $row){
			$this->session->set_userdata('username',$row['username']);
			$this->session->set_userdata('name',$row['name']);
			$this->session->set_userdata('role',$row['role']);
		}
		$valid=1;
	}
	$Q-> free_result();
	// echo ($_POST['password']);
	return $valid;
}

}
?>