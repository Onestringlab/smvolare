<?php
class MPemenang extends CI_Model{

function __construct(){
	parent::__construct();
}

function get_pemenang($idpemenang){
	$data = array();
	$options = array('idpemenang' => $idpemenang);
	$Q = $this->db->get_where('tb_pemenang',$options,1);
		if ($Q->num_rows() > 0){
			$data = $Q->row_array();
		}
	$Q->free_result();
	return $data;
}


function getAll_pemenang(){
 	$this->db->select('a.*,b.namaprogram');
	$this->db->from('tb_pemenang a');
	$this->db->join('tb_program b', 'a.idprogram = b.idprogram');
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


function add_pemenang(){
	$v_date = date('Y-m-d H:i:s');
	$username = $this->session-> userdata('username');
	$sql = 'insert into tb_pemenang(tanggal,idprogram,pemenang,sponsor,keterangan,insertedon,insertedby,updatedon,updatedby)  values(?,?,?,?,?,?,?,?,?)';
	$this->db->query($sql, array($_POST['tanggal'],$_POST['idprogram'],$_POST['pemenang'],$_POST['sponsor'],$_POST['keterangan'],$v_date,$username,$v_date,$username));
}


function update_pemenang(){
	$v_date = date('Y-m-d H:i:s');
	$username = $this->session-> userdata('username');
	$sql = 'update tb_pemenang set tanggal=?,idprogram=?,pemenang=?,sponsor=?,keterangan=?,updatedon=?,updatedby=? where idpemenang=? ';
	$this->db->query($sql, array($_POST['tanggal'],$_POST['idprogram'],$_POST['pemenang'],$_POST['sponsor'],$_POST['keterangan'],$v_date,$username,$_POST['idpemenang']));
}


function delete_pemenang(){
	$sql='delete from tb_pemenang where idpemenang=?';
	$this->db->query($sql, array($_POST['idpemenang']));
}
}
?>