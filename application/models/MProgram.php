<?php
class MProgram extends CI_Model{

function __construct(){
	parent::__construct();
}

function get_program($idprogram){
	$data = array();
	$options = array('idprogram' => $idprogram);
	$Q = $this->db->get_where('tb_program',$options,1);
		if ($Q->num_rows() > 0){
			$data = $Q->row_array();
		}
	$Q->free_result();
	return $data;
}


function getAll_program(){
	$data = array();
	$this->db->order_by('namaprogram', 'ASC');
	$Q = $this->db->get('tb_program');
	if ($Q->num_rows() > 0){
		foreach ($Q->result_array() as $row){
			$data[] = $row;
		}
	}
	$Q-> free_result();
	return $data;
}


function add_program(){
	$v_date = date('Y-m-d H:i:s');
	$username = $this->session-> userdata('username');
	$sql = 'insert into tb_program(idprogram,namaprogram,statusprogram,insertedby,insertedon,updatedby,updatedon)  values(?,?,?,?,?,?,?)';
	$this->db->query($sql, array($_POST['idprogram'],$_POST['namaprogram'],$_POST['statusprogram'],$username,$v_date,$username,$v_date));
}


function update_program(){
	$v_date = date('Y-m-d H:i:s');
	$username = $this->session-> userdata('username');
	$sql = 'update tb_program set idprogram=?,namaprogram=?,statusprogram=?,updatedby=?,updatedon=? where idprogram=? ';
	$this->db->query($sql, array($_POST['idprogram'],$_POST['namaprogram'],$_POST['statusprogram'],$username,$v_date,$_POST['idprogram']));
}


function delete_program(){
	$sql='delete from tb_program where idprogram=?';
	$this->db->query($sql, array($_POST['idprogram']));
}
}
?>
