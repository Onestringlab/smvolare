<?php
class Spot extends CI_Controller {
public $data 	= 	array();
public function __construct(){
	parent::__construct();
	$this->load->model('MSpot');
}

function index(){
	$this->data['spot_list'] = $this->MSpot->getAll_spot();
	$this->data['main_content']= 'spot/view_spot_data';
	$this->load->view('view_main',$this->data);
}


function spot_form_insert(){
	$this->data['main_content']= 'spot/view_spot_form';
	$this->data['row']=null;
	$this->data['action']='insert';
	$this->load->view('view_main',$this->data);
}


function spot_form_update(){
	$this->data['row'] = $this->MSpot->get_spot($this->uri->segment(3));
	$this->data['main_content']= 'spot/view_spot_form';
	$this->data['action']='update';
	$this->load->view('view_main',$this->data);
}


function spot_form_delete(){
	$this->data['row'] = $this->MSpot->get_spot($this->uri->segment(3));
	$this->data['main_content']= 'spot/view_spot_form';
	$this->data['action']='delete';
	$this->load->view('view_main',$this->data);
}


function spot_manage(){
	$action = $_POST['action'];
	if($action=='insert'){
		$this->MSpot->add_spot();
	}
	if($action=='update'){
		$this->MSpot->update_spot();
	}
	if($action=='delete'){
		$this->MSpot->delete_spot();
	}
	$this->data['main_content']= 'view_spot_data';
	redirect('spot');
}
}
?>
