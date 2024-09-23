<?php
class Papanpesan extends CI_Controller {
public $data 	= 	array();
public function __construct(){
	parent::__construct();
	$this->load->model('MPapanpesan');
}

function index(){
	$this->data['papanpesan_list'] = $this->MPapanpesan->getAll_papanpesan();
	$this->data['main_content']= 'papanpesan/view_papanpesan_data';
	$this->load->view('view_main',$this->data);
}


function papanpesan_form_insert(){
	$this->data['main_content']= 'papanpesan/view_papanpesan_form';
	$this->data['row']=null;
	$this->data['action']='insert';
	$this->load->view('view_main',$this->data);
}


function papanpesan_form_update(){
	$this->data['row'] = $this->MPapanpesan->get_papanpesan($this->uri->segment(3));
	$this->data['main_content']= 'papanpesan/view_papanpesan_form';
	$this->data['action']='update';
	$this->load->view('view_main',$this->data);
}


function papanpesan_form_delete(){
	$this->data['row'] = $this->MPapanpesan->get_papanpesan($this->uri->segment(3));
	$this->data['main_content']= 'papanpesan/view_papanpesan_form';
	$this->data['action']='delete';
	$this->load->view('view_main',$this->data);
}


function papanpesan_manage(){
	$action = $_POST['action'];
	if($action=='insert'){
		$this->MPapanpesan->add_papanpesan();
	}
	if($action=='update'){
		$this->MPapanpesan->update_papanpesan();
	}
	if($action=='delete'){
		$this->MPapanpesan->delete_papanpesan();
	}
	$this->data['main_content']= 'papanpesan_view';
	redirect('papanpesan');
}
}
?>
