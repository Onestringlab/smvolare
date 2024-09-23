<?php
class Jadwal extends CI_Controller {
	public $data 	= 	array();
	public function __construct(){
		parent::__construct();
		$this->load->model('MJadwal');
		$this->load->model('MProgram');
		$this->load->model('MAdmin');
	}

	function index(){
		$this->data['jadwal_list'] = $this->MJadwal->getAll_jadwal();
		$this->data['main_content']= 'jadwal/view_jadwal_data';
		$this->load->view('view_main',$this->data);
	}


	function jadwal_form_insert(){
		$this->data['main_content']= 'jadwal/view_jadwal_form';
		$this->data['program_list'] = $this->MProgram->getAll_program();
		$this->data['penyiar_list'] = $this->MAdmin->getAll_penyiar();
		$this->data['row']=null;
		$this->data['action']='insert';
		$this->load->view('view_main',$this->data);
	}


	function jadwal_form_update(){
		$this->data['row'] = $this->MJadwal->get_jadwal($this->uri->segment(3));
		$this->data['program_list'] = $this->MProgram->getAll_program();
		$this->data['penyiar_list'] = $this->MAdmin->getAll_penyiar();
		$this->data['main_content']= 'jadwal/view_jadwal_form';
		$this->data['action']='update';
		$this->load->view('view_main',$this->data);
	}


	function jadwal_form_delete(){
		$this->data['row'] = $this->MJadwal->get_jadwal($this->uri->segment(3));
		$this->data['program_list'] = $this->MProgram->getAll_program();
		$this->data['penyiar_list'] = $this->MAdmin->getAll_penyiar();
		$this->data['main_content']= 'jadwal/view_jadwal_form';
		$this->data['action']='delete';
		$this->load->view('view_main',$this->data);
	}

	function jadwal_harian(){
		$this->data['senin'] = $this->MJadwal->getDay_jadwal(1);
		$this->data['selasa'] = $this->MJadwal->getDay_jadwal(2);
		$this->data['rabu'] = $this->MJadwal->getDay_jadwal(3);
		$this->data['kamis'] = $this->MJadwal->getDay_jadwal(4);
		$this->data['jumat'] = $this->MJadwal->getDay_jadwal(5);
		$this->data['sabtu'] = $this->MJadwal->getDay_jadwal(6);
		$this->data['minggu'] = $this->MJadwal->getDay_jadwal(7);
		$this->data['main_content']= 'jadwal/view_jadwal_harian';
		$this->load->view('view_main',$this->data);
	}

	function get_json(){
		$namaHari = ['Senin','Selasa', 'Rabu','Kamis','Jumat','Sabtu','Minggu'];
		$imagesHari = [
			["http://128.199.105.5/photoWebVolare/volarePagi.jpeg",
			"http://128.199.105.5/photoWebVolare/volareSiang.jpeg",
			"http://128.199.105.5/photoWebVolare/volareSore.jpg"],
			[
			"http://128.199.105.5/photoWebVolare/semangatPagi.jpeg",
			"http://128.199.105.5/photoWebVolare/klikHerman.jpeg",
			"http://128.199.105.5/photoWebVolare/VolareJazz.jpg"],
			[
			"http://128.199.105.5/photoWebVolare/musikSore.jpeg",
			"http://128.199.105.5/photoWebVolare/gaulBarengVolare.jpeg",
			"http://128.199.105.5/photoWebVolare/fotismini.jpeg"],
			[
			"http://128.199.105.5/photoWebVolare/bioskop.jpg",
			"http://128.199.105.5/photoWebVolare/khazanahIslam.jpeg",
			"http://128.199.105.5/photoWebVolare/manTerritory.jpg"],
			[
			"http://128.199.105.5/photoWebVolare/volarePagi.jpeg",
			"http://128.199.105.5/photoWebVolare/kajianMuslimah.jpeg",
			"http://128.199.105.5/photoWebVolare/yesterhits.jpg"],
			[
			"http://128.199.105.5/photoWebVolare/volareChitChat.jpeg",
			"http://128.199.105.5/photoWebVolare/gaulBarengVolare.jpeg",
			"http://128.199.105.5/photoWebVolare/duniaKampus.jpeg"],
			[
			"http://128.199.105.5/photoWebVolare/VNOSProgram.jpg",
			"http://128.199.105.5/photoWebVolare/Indo10Program.jpg",
			"http://128.199.105.5/photoWebVolare/Flava.jpg"],

		];
		for($i = 0; $i < count($namaHari); $i++){
			$this->data[$i]['hari'] = $namaHari[$i];
			$this->data[$i]['images'] = $imagesHari[$i];
			$this->data[$i]['acara'] = $this->MJadwal->get_json_harian($i+1);
		}


  // $this->data[]['senin']['acara'] = $this->MJadwal->get_json_harian(1);
	// $this->data[]['selasa']['acara'] = $this->MJadwal->get_json_harian(2);
	// $this->data[]['rabu']['acara'] = $this->MJadwal->get_json_harian(3);
	// $this->data[]['kamis']['acara'] = $this->MJadwal->get_json_harian(4);
	// $this->data[]['jumat']['acara'] = $this->MJadwal->get_json_harian(5);
	// $this->data[]['sabtu']['acara'] = $this->MJadwal->get_json_harian(6);
	// $this->data[]['minggu']['acara'] = $this->MJadwal->get_json_harian(7);
		echo json_encode($this->data);
	}


	function jadwal_manage(){
		$action = $_POST['action'];
		if($action=='insert'){
			$this->MJadwal->add_jadwal();
		}
		if($action=='update'){
			$this->MJadwal->update_jadwal();
		}
		if($action=='delete'){
			$this->MJadwal->delete_jadwal();
		}
		$this->data['main_content']= 'jadwal_view';
		redirect('jadwal');
	}
}
?>
