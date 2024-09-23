<?php
class MLogiklan extends CI_Model{

function __construct(){
	parent::__construct();
}

function get_logiklan($idlogiklan){
	$data = array();
	$options = array('idlogiklan' => $idlogiklan);
	$Q = $this->db->get_where('tb_logiklan',$options,1);
		if ($Q->num_rows() > 0){
			$data = $Q->row_array();
		}
	$Q->free_result();
	return $data;
}


function getAll_logiklan($idiklan,$d1,$d2){
 	$this->db->select('a.*,b.judul');
	$this->db->from('tb_logiklan a');
	$this->db->where('a.idiklan',$idiklan);
	$this->db->where('a.insertedon >=',tanggalSQL($d1));
	$this->db->where('a.insertedon <=',tanggalSQL($d2));
	$this->db->join('tb_iklan b', 'a.idiklan = b.idiklan');
	$this->db->order_by('insertedon', 'ASC');


	$data = array();
	$Q = $this->db->get();
	if ($Q->num_rows() > 0){
		foreach ($Q->result_array() as $row){
			$data[] = $row;
		}
	}
	$Q-> free_result();
	//echo $this->db->last_query();
	return $data;
}

function add_logiklan(){
	$v_date = date('Y-m-d H:i:s');
	$username = $this->session-> userdata('username');
	$sql = 'insert into tb_logiklan(idlogiklan,idiklan,juduliklan,insertedon,insertedby)  values(?,?,?,?,?)';
	$this->db->query($sql, array($_POST['idlogiklan'],$_POST['idiklan'],$_POST['juduliklan'],$_POST['insertedon'],$_POST['insertedby']));
}


function update_logiklan(){
	$v_date = date('Y-m-d H:i:s');
	$username = $this->session-> userdata('username');
	$sql = 'update tb_logiklan set idlogiklan=?,idiklan=?,juduliklan=?,insertedon=?,insertedby=? where idlogiklan=? ';
	$this->db->query($sql, array($_POST['idlogiklan'],$_POST['idiklan'],$_POST['juduliklan'],$_POST['insertedon'],$_POST['insertedby']));
}


function delete_logiklan(){
	$sql='delete from tb_logiklan where idlogiklan=?';
	$this->db->query($sql, array($_POST['idlogiklan']));
}
}
?>
