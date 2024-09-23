<?php
class Naskah extends CI_Controller {
public $data 	= 	array();
public function __construct(){
	parent::__construct();
	$this->load->model('MNaskah');
	$this->load->model('MProgram');
	$this->load->model('MAdmin');
}

function index(){

	$this->data['penyiar_list'] = $this->MAdmin->getAll_penyiar();
	$this->data['program_list'] = $this->MProgram->getAll_program();

	$username = "-";
	if(isset($_POST['username'])&& !empty($_POST['username'])){
		$username = $_POST['username'];
	}
	$this->data['username'] = $username;
	$d1 = new DateTime();
	$d1->sub(new DateInterval('P1D'));
	if(isset($_POST['tanggal1'])&& !empty($_POST['tanggal1'])){
		$d1 = new DateTime($_POST['tanggal1']);
	}
	$this->data['tanggal1'] = tanggalSql($d1);
	$d2 = new DateTime();
	$d2->add(new DateInterval('P14D'));
	if(isset($_POST['tanggal2'])&& !empty($_POST['tanggal2'])){
		$d2 = new DateTime($_POST['tanggal2']);
	}
	$this->data['tanggal2'] = tanggalSql($d2);
	$this->data['naskah_list'] = $this->MNaskah->get_naskah_admin_tanggal($username,$d1,$d2);
	$this->data['main_content']= 'naskah/view_naskah_data';
	$this->load->view('view_main',$this->data);
}


function naskah_form_insert(){
	$this->data['main_content']= 'naskah/view_naskah_form';
	$this->data['program_list'] = $this->MProgram->getAll_program();
	$this->data['row']=null;
	$this->data['action']='insert';
	$this->load->view('view_main',$this->data);
}


function naskah_form_update(){
	$this->data['row'] = $this->MNaskah->get_naskah($this->uri->segment(3));
	$this->data['main_content']= 'naskah/view_naskah_form';
	$this->data['program_list'] = $this->MProgram->getAll_program();
	$this->data['action']='update';
	$this->load->view('view_main',$this->data);
}


function naskah_form_delete(){
	$this->data['row'] = $this->MNaskah->get_naskah($this->uri->segment(3));
	$this->data['main_content']= 'naskah/view_naskah_form';
	$this->data['program_list'] = $this->MProgram->getAll_program();
	$this->data['action']='delete';
	$this->load->view('view_main',$this->data);
}


function naskah_manage(){
	$action = $_POST['action'];
	if($action=='insert'){
		$this->MNaskah->add_naskah();
	}
	if($action=='update'){
		$this->MNaskah->update_naskah();
	}
	if($action=='delete'){
		$this->MNaskah->delete_naskah();
	}
	$this->data['main_content']= 'naskah_view';
	redirect('naskah');
}
}
?>
