<?php
class Topik extends CI_Controller {
public $data 	= 	array();
public function __construct(){
	parent::__construct();
	$this->load->model('MTopik');
	$this->load->model('MProgram');
}

function index(){
	$this->data['topik_list'] = $this->MTopik->getAll_topik();
	$this->data['main_content']= 'topik/view_topik_data';
	$this->load->view('view_main',$this->data);
}


function topik_form_insert(){
	$this->data['main_content']= 'topik/view_topik_form';
	$this->data['program_list'] = $this->MProgram->getAll_program();
	$this->data['row']=null;
	$this->data['action']='insert';
	$this->load->view('view_main',$this->data);
}


function topik_form_update(){
	$this->data['row'] = $this->MTopik->get_topik($this->uri->segment(3));
	$this->data['program_list'] = $this->MProgram->getAll_program();
	$this->data['main_content']= 'topik/view_topik_form';
	$this->data['action']='update';
	$this->load->view('view_main',$this->data);
}


function topik_form_delete(){
	$this->data['row'] = $this->MTopik->get_topik($this->uri->segment(3));
	$this->data['program_list'] = $this->MProgram->getAll_program();
	$this->data['main_content']= 'topik/view_topik_form';
	$this->data['action']='delete';
	$this->load->view('view_main',$this->data);
}


function topik_manage(){
	$action = $_POST['action'];
	if($action=='insert'){
		$this->MTopik->add_topik();
	}
	if($action=='update'){
		$this->MTopik->update_topik();
	}
	if($action=='delete'){
		$this->MTopik->delete_topik();
	}
	$this->data['main_content']= 'topik_view';
	redirect('topik');
}
}
?>
