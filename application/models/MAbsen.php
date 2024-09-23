<?php
class MAbsen extends CI_Model{

function __construct(){
	parent::__construct();
}

function get_absen($idabsen){
	$data = array();
	$options = array('idabsen' => $idabsen);
	$Q = $this->db->get_where('tb_absen',$options,1);
		if ($Q->num_rows() > 0){
			$data = $Q->row_array();
		}
	$Q->free_result();
	return $data;
}


function getAll_absen(){
 	$this->db->select('a.*,b.namaprogram,c.name');
	$this->db->from('tb_absen a');
	$this->db->join('tb_program b', 'a.idprogram = b.idprogram');
	$this->db->join('tb_admin c', 'a.username = c.username');
	$this->db->order_by('tanggal', 'DESC');
	$this->db->limit(50);

	$data = array();
	$Q = $this->db-> get();
	if ($Q->num_rows() > 0){
		foreach ($Q->result_array() as $row){
			$data[] = $row;
		}
	}
	$Q-> free_result();
	return $data;
}

function get_absen_admin_tanggal($username,$d1,$d2,$sebagai,$idprogram){
 	$this->db->select('a.*,b.namaprogram,c.name');
	$this->db->from('tb_absen a');
	$this->db->join('tb_program b', 'a.idprogram = b.idprogram');
	$this->db->where('a.username',$username);
	$this->db->where('a.tanggal >=',tanggalSQL($d1));
	$this->db->where('a.tanggal <=',tanggalSQL($d2));
	if($sebagai!='-'){
		$this->db->where('a.sebagai =',$sebagai);
	}
	if($idprogram!=71){
		$this->db->where('a.idprogram =',$idprogram);
	}
	$this->db->join('tb_admin c', 'a.username = c.username');
	$this->db->order_by('tanggal', 'ASC');

	$data = array();
	$Q = $this->db-> get();
	if ($Q->num_rows() > 0){
		foreach ($Q->result_array() as $row){
			$data[] = $row;
		}
	}
	$Q-> free_result();
	//echo $this->db->last_query();
	return $data;
}



function getTanggal_absen(){
 	$this->db->select('a.*,b.namaprogram,c.name');
	$this->db->from('tb_absen a');
	$this->db->join('tb_program b', 'a.idprogram = b.idprogram');
	$this->db->join('tb_admin c', 'a.username = c.username');
	$this->db->order_by('a.tanggal', 'DESC');
	$this->db->order_by('a.waktumulai', 'DESC');
	$d = new DateTime();
	if(isset($_GET['tanggal'])&& !empty($_GET['tanggal'])){
		$d = new DateTime($_GET['tanggal']);
	}
	$this->db->where('tanggal', tanggalSQL($d));
	$this->db->limit(50);

	$data = array();
	$Q = $this->db-> get();
	if ($Q->num_rows() > 0){
		foreach ($Q->result_array() as $row){
			$data[] = $row;
		}
	}
	$Q-> free_result();
	return $data;
}


function add_absen(){
	$v_date = date('Y-m-d H:i:s');
	$username = $this->session-> userdata('username');
	$ipaddress1 = getClientIP();
	$ipaddress2 = $_SERVER["REMOTE_ADDR"];
	$tanggal = date('Y-m-d');
	$mulai = date('H:i:s');
	$status=0;
	$sql = 'insert into tb_absen(username,idprogram,sebagai,tanggal,waktumulai,siaran,keterangan,ipaddress1,ipaddress2,status)  values(?,?,?,?,?,?,?,?,?,?)';
	$this->db->query($sql, array($username,$_POST['idprogram'],$_POST['sebagai'],$tanggal,$mulai,$_POST['siaran'],$_POST['keterangan'],$ipaddress1,$ipaddress2,$status));
}


function update_absen(){
	$v_date = date('Y-m-d H:i:s');
	$username = $this->session-> userdata('username');
	$sql = 'update tb_absen set idprogram=?,sebagai=?,siaran=?,keterangan=? where idabsen=? ';
	$this->db->query($sql,array($_POST['idprogram'],$_POST['sebagai'],$_POST['siaran'],$_POST['keterangan'],$_POST['idabsen']));
}

function update_status($idabsen){
	$v_date = date('Y-m-d H:i:s');
	$username = $this->session-> userdata('username');
	$selesai = date('H:i:s');
	$sql = 'update tb_absen set status=?,waktuselesai=? where idabsen=? ';
	$this->db->query($sql,array(1,$selesai,$idabsen));
}


function delete_absen(){
	$sql='delete from tb_absen where idabsen=?';
	$this->db->query($sql, array($_POST['idabsen']));
}
}
?>
