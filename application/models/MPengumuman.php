<?php
class MPengumuman extends CI_Model{

function __construct(){
	parent::__construct();
}

function get_pengumuman($idpengumuman){
	$data = array();
	$options = array('idpengumuman' => $idpengumuman);
	$Q = $this->db->get_where('tb_pengumuman',$options,1);
		if ($Q->num_rows() > 0){
			$data = $Q->row_array();
		}
	$Q->free_result();
	return $data;
}


function getAll_pengumuman(){
	$sql = 'select idpengumuman,title,pengumuman,insertedon,insertedby,updatedon,updatedby
 from tb_pengumuman order by updatedon desc';
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


function add_pengumuman(){
	$v_date = date('Y-m-d H:i:s');
	$username = $this->session-> userdata('username');
	$sql = 'insert into tb_pengumuman(title,pengumuman,insertedon,insertedby,updatedon,updatedby)  values(?,?,?,?,?,?)';
	$this->db->query($sql, array($_POST['title'],htmlentities($_POST['pengumuman']),$v_date,$username,$v_date,$username));
}


function update_pengumuman(){
	$v_date = date('Y-m-d H:i:s');
	$username = $this->session-> userdata('username');
	$sql = 'update tb_pengumuman set title=?,pengumuman=?,updatedon=?,updatedby=? where idpengumuman=? ';
	$this->db->query($sql, array($_POST['title'],htmlentities($_POST['pengumuman']),$v_date,$username,$_POST['idpengumuman']));
}


function delete_pengumuman(){
	$sql='delete from tb_pengumuman where idpengumuman=?';
	$this->db->query($sql, array($_POST['idpengumuman']));
}
}
?>