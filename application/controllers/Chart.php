<?php
header("Access-Control-Allow-Origin: *");
class Chart extends CI_Controller {
public $data 	= 	array();
public function __construct(){
	parent::__construct();
	$this->load->helper('url');
	$this->load->helper('form');
	$this->load->model('MChart');
}

function index(){
	$this->data['chart_list'] = $this->MChart->getAll_chart();
	$this->data['main_content']= 'chart/view_chart';
	$this->load->view('view_main',$this->data);
}


function chart_form_insert(){
	$this->data['main_content']= 'chart/view_chart_form';
	$this->data['row']=null;
	$this->data['action']='insert';
	$this->load->view('view_main',$this->data);
}


function chart_form_update(){
	$this->data['row'] = $this->MChart->get_chart($this->uri->segment(3));
	$this->data['main_content']= 'chart/view_chart_form';
	$this->data['action']='update';
	$this->load->view('view_main',$this->data);
}


function chart_form_delete(){
	$this->data['row'] = $this->MChart->get_chart($this->uri->segment(3));
	$this->data['main_content']= 'chart/view_chart_form';
	$this->data['action']='delete';
	$this->load->view('view_main',$this->data);
}

function get_json(){
	$this->data['row'] = $this->MChart->get_json_chart($this->uri->segment(3));
	//$this->data['main_content']= 'chart/view_chart_form';
	//$this->data['action']='update';
	//$this->load->view('view_main',$this->data);
	echo json_encode($this->data['row']);
}


function chart_manage(){
	$action = $_POST['action'];
	if($action=='insert'){
		$this->MChart->add_chart();
	}
	if($action=='update'){
		$this->MChart->update_chart();
	}
	if($action=='delete'){
		$this->MChart->delete_chart();
	}
	$this->data['main_content']= 'chart_view';
	redirect('chart');
}
}
?>
