<?php
class MChart extends CI_Model{

function __construct(){
	parent::__construct();
	$v_date = date("Y-m-d H:i:s");
}

function get_chart($idchart){
	$data = array();
	$options = array('idchart' => $idchart);
	$Q = $this->db->get_where('tb_chart',$options,1);
		if ($Q->num_rows() > 0){
			$data = $Q->row_array();
		}
	$Q->free_result();
	return $data;
}

function getAll_chart(){
	$sql = 'select idchart,chart,program,tanggal,foto,tw1,song1,artis1,tw2,song2,artis2,tw3,song3,artis3,tw4,song4,artis4,tw5,song5,artis5,tw6,song6,artis6,tw7,song7,artis7,tw8,song8,artis8,tw9,song9,artis9,tw10,song10,artis10,updatedtime,updatedby
 from tb_chart';
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


function add_chart(){
	$v_date = date('Y-m-d H:i:s');
	$username = $this->session-> userdata('username');
	$sql = 'insert into tb_chart(idchart,chart,program,tanggal,foto,tw1,song1,artis1,tw2,song2,artis2,tw3,song3,artis3,tw4,song4,artis4,tw5,song5,artis5,tw6,song6,artis6,tw7,song7,artis7,tw8,song8,artis8,tw9,song9,artis9,tw10,song10,artis10,updatedtime,updatedby)  values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	$this->db->query($sql, array($_POST['idchart'],$_POST['chart'],$_POST['program'],$_POST['tanggal'],$_POST['foto'],$_POST['tw1'],$_POST['song1'],$_POST['artis1'],$_POST['tw2'],$_POST['song2'],$_POST['artis2'],$_POST['tw3'],$_POST['song3'],$_POST['artis3'],$_POST['tw4'],$_POST['song4'],$_POST['artis4'],$_POST['tw5'],$_POST['song5'],$_POST['artis5'],$_POST['tw6'],$_POST['song6'],$_POST['artis6'],$_POST['tw7'],$_POST['song7'],$_POST['artis7'],$_POST['tw8'],$_POST['song8'],$_POST['artis8'],$_POST['tw9'],$_POST['song9'],$_POST['artis9'],$_POST['tw10'],$_POST['song10'],$_POST['artis10'],$v_date,$username));
}


function update_chart(){
	$v_date = date('Y-m-d H:i:s');
	$username = $this->session-> userdata('username');
	$sql = 'update tb_chart set chart=?,program=?,tanggal=?,foto=?,tw1=?,song1=?,artis1=?,tw2=?,song2=?,artis2=?,tw3=?,song3=?,artis3=?,tw4=?,song4=?,artis4=?,tw5=?,song5=?,artis5=?,tw6=?,song6=?,artis6=?,tw7=?,song7=?,artis7=?,tw8=?,song8=?,artis8=?,tw9=?,song9=?,artis9=?,tw10=?,song10=?,artis10=?,updatedtime=?,updatedby=? where idchart=? ';
	$this->db->query($sql, array($_POST['chart'],$_POST['program'],$_POST['tanggal'],$_POST['foto'],$_POST['tw1'],$_POST['song1'],$_POST['artis1'],$_POST['tw2'],$_POST['song2'],$_POST['artis2'],$_POST['tw3'],$_POST['song3'],$_POST['artis3'],$_POST['tw4'],$_POST['song4'],$_POST['artis4'],$_POST['tw5'],$_POST['song5'],$_POST['artis5'],$_POST['tw6'],$_POST['song6'],$_POST['artis6'],$_POST['tw7'],$_POST['song7'],$_POST['artis7'],$_POST['tw8'],$_POST['song8'],$_POST['artis8'],$_POST['tw9'],$_POST['song9'],$_POST['artis9'],$_POST['tw10'],$_POST['song10'],$_POST['artis10'],$v_date,$username,$_POST['idchart']));
}


function delete_chart(){
	$sql='delete from tb_chart where idchart=?';
	$this->db->query($sql, array($_POST['idchart']));
}

function get_json_chart($chart){
	$data = array();
	$options = array('chart' => $chart);
	$Q = $this->db->get_where('tb_chart',$options,1);
		if ($Q->num_rows() > 0){
			$data = $Q->row_array();
		}
	$Q->free_result();
	return $data;
}
}
?>
