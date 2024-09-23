<?php
class Admin extends CI_Controller {
public $data 	= 	array();
public function __construct(){
	parent::__construct();
	$this->load->model('MAdmin');
}

function index(){
	$this->data['admin_list'] = $this->MAdmin->getAll_admin();
	$this->data['main_content']= 'admin/view_admin_data';
	$this->load->view('view_main',$this->data);
}

function login(){
	$this->load->view('view_login');
}

function logout(){
	$this->session->unset_userdata('username');
	$this->session->unset_userdata('name');
	$this->session->unset_userdata('role');
	redirect('admin/login');
}

function admin_form_insert(){
	$this->data['main_content']= 'admin/view_admin_form';
	$this->data['row']=null;
	$this->data['action']='insert';
	$this->load->view('view_main',$this->data);
}


function admin_form_update(){
	$this->data['row'] = $this->MAdmin->get_admin($this->uri->segment(3));
	$this->data['main_content']= 'admin/view_admin_form';
	$this->data['action']='update';
	$this->load->view('view_main',$this->data);
}


function admin_form_delete(){
	$this->data['row'] = $this->MAdmin->get_admin($this->uri->segment(3));
	$this->data['main_content']= 'admin/view_admin_form';
	$this->data['action']='delete';
	$this->load->view('view_main',$this->data);
}

function admin_login(){
	$valid=$this->MAdmin->check_username();
	echo($valid);
	if($valid==1){
		//$this->data['main_content']= 'blank';
		//$this->load->view('view_main',$this->data);
		redirect('papanpesan');
	}else{
		redirect('admin/login');
	}

}


function admin_manage(){
	$action = $_POST['action'];
	if($action=='insert'){
		$this->MAdmin->add_admin();
	}
	if($action=='update'){
		$this->MAdmin->update_admin();
	}
	if($action=='delete'){
		$this->MAdmin->delete_admin();
	}
	$this->data['main_content']= 'admin/view_admin_data';
	redirect('admin');
}
}
?>