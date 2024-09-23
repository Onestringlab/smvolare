<?php
class MNaskah extends CI_Model{

function __construct(){
	parent::__construct();
}

function get_naskah($idnaskah){
	$data = array();
	$options = array('idnaskah' => $idnaskah);
	$Q = $this->db->get_where('tb_naskah',$options,1);
		if ($Q->num_rows() > 0){
			$data = $Q->row_array();
		}
	$Q->free_result();
	return $data;
}


function getAll_naskah(){
 	$this->db->select('a.*,b.namaprogram');
	$this->db->from('tb_naskah a');
	$this->db->join('tb_program b', 'a.program = b.idprogram');
	$this->db->order_by('tanggal', 'DESC');
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

function get_naskah_admin_tanggal($username,$d1,$d2){
 	$this->db->select('a.*,b.namaprogram');
	$this->db->from('tb_naskah a');
	$this->db->join('tb_program b', 'a.program = b.idprogram');
	if($username!='-'){
		$this->db->where('a.updatedby',$username);
	}
	$this->db->where('a.tanggal >=',tanggalSQL($d1));
	$this->db->where('a.tanggal <=',tanggalSQL($d2));
	$this->db->order_by('tanggal', 'DESC');
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


function add_naskah(){
	$v_date = date('Y-m-d H:i:s');
	$username = $this->session-> userdata('username');
	$sql = 'insert into tb_naskah(tanggal,program,judul,isinaskah,insertedon,insertedby,updatedon,updatedby)  values(?,?,?,?,?,?,?,?)';
	$this->db->query($sql, array($_POST['tanggal'],$_POST['program'],$_POST['judul'],$_POST['isinaskah'],$v_date,$username,$v_date,$username));
}


function update_naskah(){
	$v_date = date('Y-m-d H:i:s');
	$username = $this->session-> userdata('username');
	$sql = 'update tb_naskah set idnaskah=?,tanggal=?,program=?,judul=?,isinaskah=?,updatedon=?,updatedby=? where idnaskah=? ';
	$this->db->query($sql, array($_POST['idnaskah'],$_POST['tanggal'],$_POST['program'],$_POST['judul'],$_POST['isinaskah'],$v_date,$username,$_POST['idnaskah']));
}


function delete_naskah(){
	$sql='delete from tb_naskah where idnaskah=?';
	$this->db->query($sql, array($_POST['idnaskah']));
}
}
?>
