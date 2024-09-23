<?php
class MRotw extends CI_Model{

function __construct(){
	parent::__construct();
}

function get_rotw($idrotw){
	$data = array();
	$options = array('idrotw' => $idrotw);
	$Q = $this->db->get_where('tb_rotw',$options,1);
		if ($Q->num_rows() > 0){
			$data = $Q->row_array();
		}
	$Q->free_result();
	return $data;
}


function getAll_rotw(){
	$sql = 'select idrotw,nama,judullagu,artis,alasan,insertedon,insertedby,updatedon,updatedby
 from tb_rotw';
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


function add_rotw(){
	$v_date = date('Y-m-d H:i:s');
	$username = $this->session-> userdata('username');
	$name = $this->session-> userdata('name');
	$sql = 'insert into tb_rotw(nama,judullagu,artis,alasan,insertedon,insertedby,updatedon,updatedby)  values(?,?,?,?,?,?,?,?)';
	$this->db->query($sql, array($name,$_POST['judullagu'],$_POST['artis'],$_POST['alasan'],$v_date,$username,$v_date,$username));
}


function update_rotw(){
	$v_date = date('Y-m-d H:i:s');
	$username = $this->session-> userdata('username');
	$name = $this->session-> userdata('name');
	$sql = 'update tb_rotw set idrotw=?,nama=?,judullagu=?,artis=?,alasan=?,updatedon=?,updatedby=? where idrotw=? ';
	$this->db->query($sql, array($_POST['idrotw'],$name,$_POST['judullagu'],$_POST['artis'],$_POST['alasan'],$v_date,$username,$_POST['idrotw']));
}


function delete_rotw(){
	$sql='delete from tb_rotw where idrotw=?';
	$this->db->query($sql, array($_POST['idrotw']));
}
}
?>
