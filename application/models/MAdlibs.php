<?php
class MAdlibs extends CI_Model{

function __construct(){
	parent::__construct();
}

function get_adlibs($idiklan){
	$data = array();
	$options = array('idiklan' => $idiklan);
	$Q = $this->db->get_where('tb_iklan',$options,1);
		if ($Q->num_rows() > 0){
			$data = $Q->row_array();
		}
	$Q->free_result();
	return $data;
}


function getAll_adlibs(){
	$data = array();
	$this->db->order_by('idiklan', 'DESC');
	$Q = $this->db->get_where('tb_iklan',array('tipe'=>'Adlibs'));
	if ($Q->num_rows() > 0){
		foreach ($Q->result_array() as $row){
			$data[] = $row;
		}
	}
	$Q-> free_result();
	return $data;
}


function add_adlibs(){
	$v_date = date('Y-m-d H:i:s');
	$username = $this->session-> userdata('username');
	$sql = 'insert into tb_iklan(tipe,judul,isiiklan,status,insertedon,insertedbby,updatedon,updatedby)  values(?,?,?,?,?,?,?,?)';
	$this->db->query($sql, array($_POST['tipe'],$_POST['judul'],$_POST['isiiklan'],$_POST['status'],$v_date,$username,$v_date,$username));
	//echo  $this->db->last_query();
}


function update_adlibs(){
	$v_date = date('Y-m-d H:i:s');
	$username = $this->session-> userdata('username');
	$sql = 'update tb_iklan set tipe=?, judul=?, isiiklan=?,status=?,updatedon=?,updatedby=? where idiklan=? ';
	$this->db->query($sql, array($_POST['tipe'],$_POST['judul'],$_POST['isiiklan'],$_POST['status'],$v_date,$username,$_POST['idiklan']));
}


function delete_adlibs(){
	$sql='delete from tb_iklan where idiklan=?';
	$this->db->query($sql, array($_POST['idiklan']));
}
}
?>
