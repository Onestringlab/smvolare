<?php
class MTopik extends CI_Model{

function __construct(){
	parent::__construct();
}

function get_topik($idtopik){
	$data = array();
	$options = array('idtopik' => $idtopik);
	$Q = $this->db->get_where('tb_topik',$options,1);
		if ($Q->num_rows() > 0){
			$data = $Q->row_array();
		}
	$Q->free_result();
	return $data;
}


function getAll_topik(){
	$this->db->select('a.*,b.namaprogram');
	$this->db->from('tb_topik a');
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


function add_topik(){
	$v_date = date('Y-m-d H:i:s');
	$username = $this->session-> userdata('username');
	$sql = 'insert into tb_topik(tanggal,program,topik,narasumber,keterangan,insertedby,insertedon,updatedby,updatedon)  values(?,?,?,?,?,?,?,?,?)';
	$this->db->query($sql, array($_POST['tanggal'],$_POST['program'],$_POST['topik'],$_POST['narasumber'],$_POST['keterangan'],$username,$v_date,$username,$v_date));
}


function update_topik(){
	$v_date = date('Y-m-d H:i:s');
	$username = $this->session-> userdata('username');
	$sql = 'update tb_topik set tanggal=?,program=?,topik=?,narasumber=?,keterangan=?,updatedby=?,updatedon=? where idtopik=? ';
	$this->db->query($sql, array($_POST['tanggal'],$_POST['program'],$_POST['topik'],$_POST['narasumber'],$_POST['keterangan'],$username,$v_date,$_POST['idtopik']));
}


function delete_topik(){
	$sql='delete from tb_topik where idtopik=?';
	$this->db->query($sql, array($_POST['idtopik']));
}
}
?>