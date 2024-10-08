<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('view_login');
	}
	public function home()
	{
		$this->data['main_content']= 'view_home';
		$this->load->view('view_main',$this->data);
	}
	public function about()
	{
		$this->data['main_content']= 'view_about';
		$this->load->view('view_main',$this->data);
	}
	public function contact()
	{
		$this->data['main_content']= 'view_contact';
		$this->load->view('view_main',$this->data);
	}
}
