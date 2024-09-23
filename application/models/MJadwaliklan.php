<?php
class MJadwaliklan extends CI_Model{

function __construct(){
	parent::__construct();
}

function get_jadwaliklan($idjadwaliklan){
	$data = array();

	$options = array('idjadwaliklan' => $idjadwaliklan);
	$Q = $this->db->get_where('tb_jadwaliklan',$options,1);
		if ($Q->num_rows() > 0){
			$data = $Q->row_array();
		}
	$Q->free_result();
	return $data;
}


function getAll_jadwaliklan(){
	$this->db->select('a.*,b.tipe,b.judul,b.namafile,b.isiiklan');
	$this->db->from('tb_jadwaliklan a');
	$this->db->join('tb_iklan b', 'a.iklan = b.idiklan');
	$this->db->order_by('tanggal', 'ASC');
	$this->db->order_by('waktu', 'ASC');
	$d = new DateTime();
	if(isset($_GET['tanggal'])&& !empty($_GET['tanggal'])){
		$d = new DateTime($_GET['tanggal']);
	}
	$this->db->where('tanggal', tanggalSQL($d));
	$data = array();
	$Q = $this->db->get();
	if ($Q->num_rows() > 0){
		foreach ($Q->result_array() as $row){
			$data[] = $row;
		}
	}
	$Q-> free_result();
	//echo "<br>".$this->db->last_query();
	return $data;
}

function getAll_putariklan(){
	$this->db->select('a.*,b.tipe,b.judul,b.idiklan,b.namafile,b.isiiklan');
	$this->db->from('tb_jadwaliklan a');
	$this->db->join('tb_iklan b', 'a.iklan = b.idiklan');
	$this->db->order_by('tanggal', 'ASC');
	$this->db->order_by('waktu', 'ASC');
	$d = new DateTime();
	if(isset($_GET['tanggal'])&& !empty($_GET['tanggal'])){
		$d = new DateTime($_GET['tanggal']);
	}
	$this->db->where('tanggal', tanggalSQL($d));
	$this->db->where('a.status', 0);
	$data = array();
	$Q = $this->db->get();
	if ($Q->num_rows() > 0){
		foreach ($Q->result_array() as $row){
			$data[] = $row;
		}
	}
	$Q-> free_result();
	//echo "<br>".$this->db->last_query();
	return $data;
}


function add_jadwaliklan(){
	$v_date = date('Y-m-d H:i:s');
	$username = $this->session-> userdata('username');
	$sql = 'insert into tb_jadwaliklan(tanggal,waktu,iklan,status,jarak,insertedon,insertedby,updatedon,updatedby)  values(?,?,?,?,?,?,?,?,?)';
	$this->db->query($sql, array($_POST['tanggal'],$_POST['waktu'],$_POST['iklan'],$_POST['status'],$_POST['jarak'],$v_date,$username,$v_date,$username));
}


function update_jadwaliklan(){
	$v_date = date('Y-m-d H:i:s');
	$username = $this->session-> userdata('username');
	$sql = 'update tb_jadwaliklan set tanggal=?,waktu=?,iklan=?,status=?,jarak=?,updatedon=?,updatedby=? where idjadwaliklan=? ';
	$this->db->query($sql, array($_POST['tanggal'],$_POST['waktu'],$_POST['iklan'],$_POST['status'],$_POST['jarak'],$v_date,$username,$_POST['idjadwaliklan']));
	//echo $this->db->last_query();
}


function delete_jadwaliklan(){
	$sql='delete from tb_jadwaliklan where idjadwaliklan=?';
	$this->db->query($sql, array($_POST['idjadwaliklan']));
}

function salin_jadwaliklan(){
	$sql='delete from tb_jadwaliklan where tanggal=?';
	$this->db->query($sql, array($_GET['tanggalSalin']));

	$this->db->select('a.*');
	$this->db->from('tb_jadwaliklan a');
	$this->db->where('tanggal', $_GET['tanggal']);
	$v_date = date('Y-m-d H:i:s');
	$username = $this->session-> userdata('username');
	$Q = $this->db->get();
	if ($Q->num_rows() > 0){
		foreach ($Q->result_array() as $row){
			$sql = 'insert into tb_jadwaliklan(tanggal,waktu,iklan,status,jarak,insertedon,insertedby,updatedon,updatedby)  values(?,?,?,?,?,?,?,?,?)';
			$this->db->query($sql, array($_GET['tanggalSalin'],$row['waktu'],$row['iklan'],0,$row['jarak'],$v_date,$row['insertedby'],$v_date,$row['updatedby']));
		}
	}
	$Q-> free_result();

}

function update_statusiklan(){
	$v_date = date('Y-m-d H:i:s');
	$username = $this->session-> userdata('username');
	$sql = 'update tb_jadwaliklan set status=?,updatedon=?,updatedby=? where idjadwaliklan=? ';
	$this->db->query($sql, array(1,$v_date,$username,$_POST['idjadwaliklan']));
	$sql = 'insert into tb_logiklan(idiklan,juduliklan,insertedon,insertedby)  values(?,?,?,?)';
	$this->db->query($sql, array($_POST['idiklan'],$_POST['juduliklan'],$v_date,$username));
	//echo $this->db->last_query();
}

function getAll_logiklan(){
 	$this->db->select('*');
	$this->db->from('tb_logiklan');
	$this->db->order_by('insertedon', 'DESC');
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

function getAllbyTanggal_logiklan(){
 	$this->db->select('*');
	$this->db->from('tb_logiklan');
	$this->db->order_by('insertedon', 'DESC');
	$d = new DateTime();
	$this->db->where("DATE(insertedon)", tanggalSQL($d));
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

}
?>
