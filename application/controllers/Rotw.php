<?php
class Rotw extends CI_Controller {
public $data 	= 	array();
public function __construct(){
	parent::__construct();
	$this->load->model('MRotw');
}

function index(){
	$this->data['rotw_list'] = $this->MRotw->getAll_rotw();
	$this->data['main_content']= 'rotw/view_rotw_data';
	$this->load->view('view_main',$this->data);
}


function rotw_form_insert(){
	$this->data['main_content']= 'rotw/view_rotw_form';
	$this->data['row']=null;
	$this->data['action']='insert';
	$this->load->view('view_main',$this->data);
}


function rotw_form_update(){
	$this->data['row'] = $this->MRotw->get_rotw($this->uri->segment(3));
	$this->data['main_content']= 'rotw/view_rotw_form';
	$this->data['action']='update';
	$this->load->view('view_main',$this->data);
}


function rotw_form_delete(){
	$this->data['row'] = $this->MRotw->get_rotw($this->uri->segment(3));
	$this->data['main_content']= 'rotw/view_rotw_form';
	$this->data['action']='delete';
	$this->load->view('view_main',$this->data);
}


function rotw_manage(){
	$action = $_POST['action'];
	if($action=='insert'){
		$this->MRotw->add_rotw();
	}
	if($action=='update'){
		$this->MRotw->update_rotw();
	}
	if($action=='delete'){
		$this->MRotw->delete_rotw();
	}
	$this->data['main_content']= 'rotw_view';
	redirect('rotw');
}
}
?>
