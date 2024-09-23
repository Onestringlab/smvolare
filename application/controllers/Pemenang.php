<?php
class Pemenang extends CI_Controller {
public $data 	= 	array();
public function __construct(){
	parent::__construct();
	$this->load->model('MPemenang');
	$this->load->model('MProgram');
}

function index(){
	$this->data['pemenang_list'] = $this->MPemenang->getAll_pemenang();
	$this->data['main_content']= 'pemenang/view_pemenang_data';
	$this->load->view('view_main',$this->data);
}


function pemenang_form_insert(){
	$this->data['main_content']= 'pemenang/view_pemenang_form';
	$this->data['program_list'] = $this->MProgram->getAll_program();
	$this->data['row']=null;
	$this->data['action']='insert';
	$this->load->view('view_main',$this->data);
}


function pemenang_form_update(){
	$this->data['row'] = $this->MPemenang->get_pemenang($this->uri->segment(3));
	$this->data['program_list'] = $this->MProgram->getAll_program();
	$this->data['main_content']= 'pemenang/view_pemenang_form';
	$this->data['action']='update';
	$this->load->view('view_main',$this->data);
}


function pemenang_form_delete(){
	$this->data['row'] = $this->MPemenang->get_pemenang($this->uri->segment(3));
	$this->data['program_list'] = $this->MProgram->getAll_program();
	$this->data['main_content']= 'pemenang/view_pemenang_form';
	$this->data['action']='delete';
	$this->load->view('view_main',$this->data);
}


function pemenang_manage(){
	$action = $_POST['action'];
	if($action=='insert'){
		$this->MPemenang->add_pemenang();
	}
	if($action=='update'){
		$this->MPemenang->update_pemenang();
	}
	if($action=='delete'){
		$this->MPemenang->delete_pemenang();
	}
	$this->data['main_content']= 'pemenang_view';
	redirect('pemenang');
}
}
?>