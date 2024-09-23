<?php
class Adlibs extends CI_Controller {
public $data 	= 	array();
public function __construct(){
	parent::__construct();
	$this->load->model('MAdlibs');
}

function index(){
	$this->data['adlibs_list'] = $this->MAdlibs->getAll_adlibs();
	$this->data['main_content']= 'adlibs/view_adlibs_data';
	$this->load->view('view_main',$this->data);
}


function adlibs_form_insert(){
	$this->data['main_content']= 'adlibs/view_adlibs_form';
	$this->data['row']=null;
	$this->data['action']='insert';
	$this->load->view('view_main',$this->data);
}


function adlibs_form_update(){
	$this->data['row'] = $this->MAdlibs->get_adlibs($this->uri->segment(3));
	$this->data['main_content']= 'adlibs/view_adlibs_form';
	$this->data['action']='update';
	$this->load->view('view_main',$this->data);
}


function adlibs_form_delete(){
	$this->data['row'] = $this->MAdlibs->get_adlibs($this->uri->segment(3));
	$this->data['main_content']= 'adlibs/view_adlibs_form';
	$this->data['action']='delete';
	$this->load->view('view_main',$this->data);
}


function adlibs_manage(){
	$action = $_POST['action'];
	if($action=='insert'){
		$this->MAdlibs->add_adlibs();
	}
	if($action=='update'){
		$this->MAdlibs->update_adlibs();
	}
	if($action=='delete'){
		$this->MAdlibs->delete_adlibs();
	}
	$this->data['main_content']= 'adlibs_view';
	redirect('adlibs');
}
}
?>
