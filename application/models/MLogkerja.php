<?php
class MLogkerja extends CI_Model{

function __construct(){
	parent::__construct();
}

function get_logkerja($idlogkerja){
	$data = array();
	$options = array('idlogkerja' => $idlogkerja);
	$Q = $this->db->get_where('tb_logkerja',$options,1);
		if ($Q->num_rows() > 0){
			$data = $Q->row_array();
		}
	$Q->free_result();
	return $data;
}


function getAll_logkerja(){
	$sql = 'select idlogkerja,tanggal,kerja,keterangan,insertedon,insertedby,updatedon,updatedby
 from tb_logkerja order by tanggal desc,insertedon desc';
	$data = array();
	$Q = $this->db-> query($sql);
	if ($Q->num_rows() > 0){
		foreach ($Q->result_array() as $row){
			$data[] = $row;
		}
	}
	$Q-> free_result();
	return $data;
}

function get_logkerja_admin_tanggal($username,$d1,$d2){
 	$this->db->select('a.*');
	$this->db->from('tb_logkerja a');
	if($username!='-'){
		$this->db->where('a.updatedby',$username);
	}
	$this->db->where('a.tanggal >=',tanggalSQL($d1));
	$this->db->where('a.tanggal <=',tanggalSQL($d2));
	$this->db->order_by('tanggal');
	$this->db->limit(50);

	$data = array();
	$Q = $this->db->get();
	if ($Q->num_rows() > 0){
		foreach ($Q->result_array() as $row){
			$data[] = $row;
		}
	}
	$Q-> free_result();
	return $data;
}


function add_logkerja(){
	$v_date = date('Y-m-d H:i:s');
	$username = $this->session-> userdata('username');
	$sql = 'insert into tb_logkerja(tanggal,kerja,keterangan,insertedon,insertedby,updatedon,updatedby)  values(?,?,?,?,?,?,?)';
	$this->db->query($sql, array($_POST['tanggal'],$_POST['kerja'],$_POST['keterangan'],$v_date,$username,$v_date,$username));
}


function update_logkerja(){
	$v_date = date('Y-m-d H:i:s');
	$username = $this->session-> userdata('username');
	$sql = 'update tb_logkerja set tanggal=?,kerja=?,keterangan=?,updatedon=?,updatedby=? where idlogkerja=? ';
	$this->db->query($sql, array($_POST['tanggal'],$_POST['kerja'],$_POST['keterangan'],$v_date,$username,$_POST['idlogkerja']));
}


function delete_logkerja(){
	$sql='delete from tb_logkerja where idlogkerja=?';
	$this->db->query($sql, array($_POST['idlogkerja']));
}
}
?>