<?php
class MPapanpesan extends CI_Model{

function __construct(){
	parent::__construct();
}

function get_papanpesan($idpapanpesan){
	$data = array();
	$options = array('idpapanpesan' => $idpapanpesan);
	$Q = $this->db->get_where('tb_papanpesan',$options,1);
		if ($Q->num_rows() > 0){
			$data = $Q->row_array();
		}
	$Q->free_result();
	return $data;
}


function getAll_papanpesan(){
	$data = array();
	$this->db->select('a.*');
	$this->db->from('tb_papanpesan a');
	$this->db->order_by('waktu', 'DESC');
	$this->db->limit(50);
	$Q = $this->db->get();
	if ($Q->num_rows() > 0){
		foreach ($Q->result_array() as $row){
			$data[] = $row;
		}
	}
	$Q-> free_result();
	return $data;
}


function add_papanpesan(){
	$v_date = date('Y-m-d H:i:s');
	$username = $this->session-> userdata('username');
	$name = $this->session-> userdata('name');
	$sql = 'insert into tb_papanpesan(waktu,nama,pesan,insertedon,insertedby,updatedon,updatedby)  values(?,?,?,?,?,?,?)';
	$this->db->query($sql, array($v_date,$name,$_POST['pesan'],$v_date,$username,$v_date,$username));
}


function update_papanpesan(){
	$v_date = date('Y-m-d H:i:s');
	$username = $this->session-> userdata('username');
	$name = $this->session-> userdata('name');
	$sql = 'update tb_papanpesan set waktu=?,nama=?,pesan=?,updatedon=?,updatedby=? where idpapanpesan=? ';
	$this->db->query($sql, array($v_date,$name,$_POST['pesan'],$v_date,$username,$_POST['idpapanpesan']));
}


function delete_papanpesan(){
	$sql='delete from tb_papanpesan where idpapanpesan=?';
	$this->db->query($sql, array($_POST['idpapanpesan']));
}
}
?>
