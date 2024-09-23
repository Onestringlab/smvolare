<?php
class Absen extends CI_Controller {
public $data 	= 	array();
public function __construct(){
	parent::__construct();
	$this->load->model('MAbsen');
	$this->load->model('MAdmin');
	$this->load->model('MProgram');
}

function index(){
	$this->data['absen_list'] = $this->MAbsen->getTanggal_absen();
	$this->data['main_content']= 'absen/view_absen_data';
	$this->load->view('view_main',$this->data);
}

function absen_laporan(){
	$this->data['penyiar_list'] = $this->MAdmin->getAll_penyiar();
	$this->data['program_list'] = $this->MProgram->getAll_program();
	$this->data['main_content']= 'absen/view_absen_laporan';

	$username = "xxx";
	if(isset($_POST['username'])&& !empty($_POST['username'])){
		$username = $_POST['username'];
	}
	$this->data['username'] = $username;
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
	$sebagai = "xxx";
	if(isset($_POST['sebagai'])&& !empty($_POST['sebagai'])){
		$sebagai = $_POST['sebagai'];
	}
	$this->data['sebagai'] = $sebagai;
	$idprogram = 0;
	if(isset($_POST['idprogram'])&& !empty($_POST['idprogram'])){
		$idprogram = $_POST['idprogram'];
	}
	$this->data['idprogram'] = $idprogram;

	$this->data['absen_list'] = $this->MAbsen->get_absen_admin_tanggal($username,$d1,$d2,$sebagai,$idprogram);

	$this->load->view('view_main',$this->data);
}



function absen_form_insert(){
	$this->data['main_content']= 'absen/view_absen_form';
	$this->data['program_list'] = $this->MProgram->getAll_program();
	$this->data['row']=null;
	$this->data['action']='insert';
	$this->load->view('view_main',$this->data);
}


function absen_form_update(){
	$this->data['row'] = $this->MAbsen->get_absen($this->uri->segment(3));
	$this->data['program_list'] = $this->MProgram->getAll_program();
	$this->data['main_content']= 'absen/view_absen_form';
	$this->data['action']='update';
	$this->load->view('view_main',$this->data);
}


function absen_form_delete(){
	$this->data['row'] = $this->MAbsen->get_absen($this->uri->segment(3));
	$this->data['program_list'] = $this->MProgram->getAll_program();
	$this->data['main_content']= 'absen/view_absen_form';
	$this->data['action']='delete';
	$this->load->view('view_main',$this->data);
}

function update_status_absen(){
	$this->MAbsen->update_status($this->uri->segment(3));
	redirect('absen');
}

function absen_manage(){
	$action = $_POST['action'];
	if($action=='insert'){
		$this->MAbsen->add_absen();
	}
	if($action=='update'){
		$this->MAbsen->update_absen();
	}
	if($action=='delete'){
		$this->MAbsen->delete_absen();
	}
	$this->data['main_content']= 'absen_view';
	redirect('absen');
}
}
?>
