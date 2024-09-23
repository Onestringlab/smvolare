<?php
header("Access-Control-Allow-Origin: *");
class MJadwal extends CI_Model{

function __construct(){
	parent::__construct();
}

function get_jadwal($idjadwal){
	$data = array();
	$options = array('idjadwal' => $idjadwal);
	$Q = $this->db->get_where('tb_jadwal',$options,1);
		if ($Q->num_rows() > 0){
			$data = $Q->row_array();
		}
	$Q->free_result();
	return $data;
}


function getAll_jadwal(){
	$this->db->select('a.*,b.namaprogram,c.name as petugas1,d.name as petugas2');
	$this->db->from('tb_jadwal a');
	$this->db->join('tb_program b', 'a.program = b.idprogram');
	$this->db->join('tb_admin c', 'a.petugas1 = c.idadmin');
	$this->db->join('tb_admin d', 'a.petugas2 = d.idadmin');
	$this->db->order_by('hari', 'ASC');
	$this->db->order_by('mulai', 'ASC');
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

function getDay_jadwal($day){
	$this->db->select('a.*,b.namaprogram,c.name as petugas1,d.name as petugas2');
	$this->db->from('tb_jadwal a');
	$this->db->join('tb_program b', 'a.program = b.idprogram');
	$this->db->join('tb_admin c', 'a.petugas1 = c.idadmin');
	$this->db->join('tb_admin d', 'a.petugas2 = d.idadmin');
	$this->db->where('hari', $day);
	$this->db->order_by('hari', 'ASC');
	$this->db->order_by('mulai', 'ASC');
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

function get_json_harian($day){
	$this->db->select('a.hari,a.mulai,b.namaprogram as nama');
	$this->db->from('tb_jadwal a');
	$this->db->join('tb_program b', 'a.program = b.idprogram');
	$this->db->join('tb_admin c', 'a.petugas1 = c.idadmin');
	$this->db->where('hari', $day);
	$this->db->order_by('hari', 'ASC');
	$this->db->order_by('mulai', 'ASC');
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


function add_jadwal(){
	$v_date = date('Y-m-d H:i:s');
	$username = $this->session-> userdata('username');
	$sql = 'insert into tb_jadwal(hari,mulai,selesai,program,petugas1,petugas2,keterangan,insertedon,insertedby,updatedon,updatedby)  values(?,?,?,?,?,?,?,?,?,?,?)';
	$this->db->query($sql, array($_POST['hari'],$_POST['mulai'],$_POST['selesai'],$_POST['program'],$_POST['petugas1'],$_POST['petugas2'],$_POST['keterangan'],$v_date,$username,$v_date,$username));
}


function update_jadwal(){
	$v_date = date('Y-m-d H:i:s');
	$username = $this->session-> userdata('username');
	$sql = 'update tb_jadwal set hari=?,mulai=?,selesai=?,program=?,petugas1=?,petugas2=?,keterangan=?,updatedon=?,updatedby=? where idjadwal=? ';
	$this->db->query($sql, array($_POST['hari'],$_POST['mulai'],$_POST['selesai'],$_POST['program'],$_POST['petugas1'],$_POST['petugas2'],$_POST['keterangan'],$v_date,$username,$_POST['idjadwal']));
}


function delete_jadwal(){
	$sql='delete from tb_jadwal where idjadwal=?';
	$this->db->query($sql, array($_POST['idjadwal']));
}
}
?>
