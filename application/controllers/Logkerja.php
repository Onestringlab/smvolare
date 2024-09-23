<?php
class Logkerja extends CI_Controller {
public $data 	= 	array();
public function __construct(){
	parent::__construct();
	$this->load->model('MLogkerja');
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

	$this->data['logkerja_list'] = $this->MLogkerja->get_logkerja_admin_tanggal($username,$d1,$d2);
	$this->data['main_content']= 'logkerja/view_logkerja_data';
	$this->load->view('view_main',$this->data);
}


function logkerja_form_insert(){
	$this->data['main_content']= 'logkerja/view_logkerja_form';
	$this->data['row']=null;
	$this->data['action']='insert';
	$this->load->view('view_main',$this->data);
}


function logkerja_form_update(){
	$this->data['row'] = $this->MLogkerja->get_logkerja($this->uri->segment(3));
	$this->data['main_content']= 'logkerja/view_logkerja_form';
	$this->data['action']='update';
	$this->load->view('view_main',$this->data);
}


function logkerja_form_delete(){
	$this->data['row'] = $this->MLogkerja->get_logkerja($this->uri->segment(3));
	$this->data['main_content']= 'logkerja/view_logkerja_form';
	$this->data['action']='delete';
	$this->load->view('view_main',$this->data);
}


function logkerja_manage(){
	$action = $_POST['action'];
	if($action=='insert'){
		$this->MLogkerja->add_logkerja();
	}
	if($action=='update'){
		$this->MLogkerja->update_logkerja();
	}
	if($action=='delete'){
		$this->MLogkerja->delete_logkerja();
	}
	$this->data['main_content']= 'logkerja_view';
	redirect('logkerja');
}
}
?>
