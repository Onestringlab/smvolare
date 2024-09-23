<?php
class Logiklan extends CI_Controller {
public $data 	= 	array();
public function __construct(){
	parent::__construct();
	$this->load->model('MLogiklan');
	$this->load->model('MSpot');
	$this->load->model('MAdmin');
}

function index(){

	$this->data['main_content']= 'logiklan/view_logiklan_data';
	$this->data['iklan_list'] = $this->MSpot->getAll_iklan();

	$idiklan = 0;
	if(isset($_POST['idiklan'])&& !empty($_POST['idiklan'])){
		$idiklan = $_POST['idiklan'];
	}
	$this->data['idiklan'] = $idiklan;
	$d1 = new DateTime();
	if(isset($_POST['tanggal1'])&& !empty($_POST['tanggal1'])){
		$d1 = new DateTime($_POST['tanggal1']);
	}
	$this->data['tanggal1'] = tanggalSql($d1);
	$d2 = new DateTime();
	if(isset($_POST['tanggal2'])&& !empty($_POST['tanggal2'])){
		$d2 = new DateTime($_POST['tanggal2']);
	}
	$this->data['tanggal2'] = tanggalSql($d2);

	$this->data['logiklan_list'] = $this->MLogiklan->getAll_logiklan($idiklan,$d1,$d2);

	$this->load->view('view_main',$this->data);
	//echo tanggalSql($d);
}

function logiklan_form_insert(){
	$this->data['main_content']= 'logiklan/view_logiklan_form';
	$this->data['row']=null;
	$this->data['action']='insert';
	$this->load->view('view_main',$this->data);
}


function logiklan_form_update(){
	$this->data['row'] = $this->MLogiklan->get_logiklan($this->uri->segment(3));
	$this->data['main_content']= 'logiklan/view_logiklan_form';
	$this->data['action']='update';
	$this->load->view('view_main',$this->data);
}


function logiklan_form_delete(){
	$this->data['row'] = $this->MLogiklan->get_logiklan($this->uri->segment(3));
	$this->data['main_content']= 'logiklan/view_logiklan_form';
	$this->data['action']='delete';
	$this->load->view('view_main',$this->data);
}


function logiklan_manage(){
	$action = $_POST['action'];
	if($action=='insert'){
		$this->MLogiklan->add_logiklan();
	}
	if($action=='update'){
		$this->MLogiklan->update_logiklan();
	}
	if($action=='delete'){
		$this->MLogiklan->delete_logiklan();
	}
	$this->data['main_content']= 'logiklan_view';
	redirect('logiklan');
}
}
?>