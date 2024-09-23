<?php
class Pengumuman extends CI_Controller {
public $data 	= 	array();
public function __construct(){
	parent::__construct();
	$this->load->model('MPengumuman');
}

function index(){
	$this->data['pengumuman_list'] = $this->MPengumuman->getAll_pengumuman();
	$this->data['main_content']= 'pengumuman/view_pengumuman_data';
	$this->load->view('view_main',$this->data);
}


function pengumuman_form_insert(){
	$this->data['main_content']= 'pengumuman/view_pengumuman_form';
	$this->data['row']=null;
	$this->data['action']='insert';
	$this->load->view('view_main',$this->data);
}


function pengumuman_form_update(){
	$this->data['row'] = $this->MPengumuman->get_pengumuman($this->uri->segment(3));
	$this->data['main_content']= 'pengumuman/view_pengumuman_form';
	$this->data['action']='update';
	$this->load->view('view_main',$this->data);
}


function pengumuman_form_delete(){
	$this->data['row'] = $this->MPengumuman->get_pengumuman($this->uri->segment(3));
	$this->data['main_content']= 'pengumuman/view_pengumuman_form';
	$this->data['action']='delete';
	$this->load->view('view_main',$this->data);
}


function pengumuman_manage(){
	$action = $_POST['action'];
	if($action=='insert'){
		$this->MPengumuman->add_pengumuman();
	}
	if($action=='update'){
		$this->MPengumuman->update_pengumuman();
	}
	if($action=='delete'){
		$this->MPengumuman->delete_pengumuman();
	}
	$this->data['main_content']= 'pengumuman_view';
	redirect('pengumuman');
}
}
?>