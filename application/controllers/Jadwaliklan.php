<?php
class Jadwaliklan extends CI_Controller {
public $data 	= 	array();
public function __construct(){
	parent::__construct();
	$this->load->model('MJadwaliklan');
	$this->load->model('MSpot');

}

function index(){
	$this->data['jadwaliklan_list'] = $this->MJadwaliklan->getAll_jadwaliklan();
	$this->data['main_content']= 'jadwaliklan/view_jadwaliklan_data';
	$d = new DateTime();
	if(isset($_GET['tanggal'])&& !empty($_GET['tanggal'])){
		$d = new DateTime($_GET['tanggal']);
	}
	$this->data['tanggal'] = tanggalSql($d);
	$this->load->view('view_main',$this->data);
}


function jadwaliklan_form_insert(){
	$this->data['main_content']= 'jadwaliklan/view_jadwaliklan_form';
	$this->data['iklan_list'] = $this->MSpot->getAll_iklan();
	$this->data['row']=null;
	$this->data['action']='insert';
	$this->load->view('view_main',$this->data);
}


function jadwaliklan_form_update(){
	$this->data['row'] = $this->MJadwaliklan->get_jadwaliklan($this->uri->segment(3));
	$this->data['iklan_list'] = $this->MSpot->getAll_iklan();
	$this->data['main_content']= 'jadwaliklan/view_jadwaliklan_form';
	$this->data['action']='update';
	$this->load->view('view_main',$this->data);
}


function jadwaliklan_form_delete(){
	$this->data['row'] = $this->MJadwaliklan->get_jadwaliklan($this->uri->segment(3));
	$this->data['iklan_list'] = $this->MSpot->getAll_iklan();
	$this->data['main_content']= 'jadwaliklan/view_jadwaliklan_form';
	$this->data['action']='delete';
	$this->load->view('view_main',$this->data);
}

function jadwaliklan_salin(){
	$this->MJadwaliklan->salin_jadwaliklan();
	//$this->load->view('view_main',$this->data);
	redirect('jadwaliklan'.'?tanggal='.$_GET['tanggalSalin']);
}

function jadwaliklan_putar(){
	$this->data['jadwaliklan_list'] = $this->MJadwaliklan->getAll_putariklan();
	$this->data['logiklan_list'] = $this->MJadwaliklan->getAllbyTanggal_logiklan();
	$this->data['main_content']= 'jadwaliklan/view_jadwaliklan_putar';
	$d = new DateTime();
	if(isset($_GET['tanggal'])&& !empty($_GET['tanggal'])){
		$d = new DateTime($_GET['tanggal']);
	}
	$this->data['tanggal'] = tanggalSql($d);
	$this->load->view('view_main',$this->data);
}

function statusiklan_update(){
	$this->MJadwaliklan->update_statusiklan();
	$waktu = new DateTime();
	echo"<tr>";
	echo"<td>-</td>";
	echo"<td>".$waktu->format('d M Y h:i:s')."</td>";
	echo"<td>".$_POST['juduliklan']."</td>";
	echo"<td>".$this->session-> userdata('username')."</td>";
	echo"<tr>";
}


function jadwaliklan_manage(){
	$action = $_POST['action'];
	$d=null;
	if($action=='insert'){
		$this->MJadwaliklan->add_jadwaliklan();
		$d = new DateTime($_POST['tanggal']);
		$this->data['tanggal'] = tanggalSql($d);
	}
	if($action=='update'){
		$this->MJadwaliklan->update_jadwaliklan();
		$d = new DateTime($_POST['tanggal']);
	}
	if($action=='delete'){
		$this->MJadwaliklan->delete_jadwaliklan();
		$d = new DateTime($_POST['tanggal']);
	}
	//$this->data['main_content']= 'jadwaliklan';
	//$this->load->view('view_main',$this->data);
	redirect('jadwaliklan'.'?tanggal='.tanggalSql($d));
}
}
?>
