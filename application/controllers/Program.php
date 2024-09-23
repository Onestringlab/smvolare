<?php
class Program extends CI_Controller {
	public $data 	= 	array();
	public function __construct(){
		parent::__construct();
		$this->load->model('MProgram');
	}

	function index(){
		$this->data['program_list'] = $this->MProgram->getAll_program();
		$this->data['main_content']= 'program/view_program_data';
		$this->load->view('view_main',$this->data);
	}


	function program_form_insert(){
		$this->data['main_content']= 'program/view_program_form';
		$this->data['row']=null;
		$this->data['action']='insert';
		$this->load->view('view_main',$this->data);
	}


	function program_form_update(){
		$this->data['row'] = $this->MProgram->get_program($this->uri->segment(3));
		$this->data['main_content']= 'program/view_program_form';
		$this->data['action']='update';
		$this->load->view('view_main',$this->data);
	}


	function program_form_delete(){
		$this->data['row'] = $this->MProgram->get_program($this->uri->segment(3));
		$this->data['main_content']= 'program/view_program_form';
		$this->data['action']='delete';
		$this->load->view('view_main',$this->data);
	}


	function program_manage(){
		$action = $_POST['action'];
		if($action=='insert'){
			$this->MProgram->add_program();
		}
		if($action=='update'){
			$this->MProgram->update_program();
		}
		if($action=='delete'){
			$this->MProgram->delete_program();
		}
		$this->data['main_content']= 'program_view';
		redirect('program');
	}
}
?>
