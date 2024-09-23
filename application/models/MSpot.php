<?php
class MSpot extends CI_Model{

function __construct(){
	parent::__construct();
}

function get_spot($idiklan){
	$data = array();
	$options = array('idiklan' => $idiklan);
	$Q = $this->db->get_where('tb_iklan',$options,1);
		if ($Q->num_rows() > 0){
			$data = $Q->row_array();
		}
	$Q->free_result();
	return $data;
}


function getAll_spot(){
	$data = array();
	$this->db->order_by('updatedon', 'DESC');
	// $this->db->limit(50);
	$Q = $this->db->get_where('tb_iklan',array('tipe'=>'Spot'));
	if ($Q->num_rows() > 0){
		foreach ($Q->result_array() as $row){
			$data[] = $row;
		}
	}
	$Q-> free_result();
	return $data;
}

function getAll_iklan(){
	$data = array();
	$this->db->order_by('judul', 'ASC');
	$Q = $this->db->get_where('tb_iklan',array('status'=>'1'));
	if ($Q->num_rows() > 0){
		foreach ($Q->result_array() as $row){
			$data[] = $row;
		}
	}
	$Q-> free_result();
	return $data;
}


function add_spot(){
	$v_date = date('Y-m-d H:i:s');
	$username = $this->session-> userdata('username');
	$config['upload_path'] = FCPATH.'uploadFile/spot/';
	$config['allowed_types'] = 'mp3';
	$filename=date("F j, Y, g:i:s a");

	$config['max_size']		= '7000';
	$config['max_width']  	= '1024';
	$config['max_height']  	= '768';

	$this->load->library('upload', $config);

	if(isset($_FILES['userfile']) && !empty($_FILES['userfile']['name'])){
		if (!$this->upload->do_upload()){
			echo $this->upload->display_errors();
		}
		else{
			$filedata = $this->upload->data();
			$newfile = md5($filename).strtolower($filedata['file_ext']);
			$dest = $filedata['file_path'].$newfile;
			if(file_exists($dest)) unlink($dest);
			rename($filedata['full_path'],$dest);
			$sql = 'insert into tb_iklan(tipe,judul,namafile,status,insertedon,insertedbby,updatedon,updatedby)  values(?,?,?,?,?,?,?,?)';
			$this->db->query($sql, array($_POST['tipe'],$_POST['judul'],$newfile,$_POST['status'],$v_date,$username,$v_date,$username));
		}
	}
}


function update_spot(){
	$v_date = date('Y-m-d H:i:s');
	$username = $this->session-> userdata('username');
	$config['upload_path'] = FCPATH.'uploadFile/spot/';
	$config['allowed_types'] = 'mp3';
	$filename=date("F j, Y, g:i:s a");
	//echo $filename;
	$config['max_size']		= '7000';
	$config['max_width']  	= '1024';
	$config['max_height']  	= '768';
	//echo $_FILES['userfile']['name'];

	$this->load->library('upload', $config);

	if(isset($_FILES['userfile']) && !empty($_FILES['userfile']['name'])){
		if (!$this->upload->do_upload()){
			echo $this->upload->display_errors();
		}
		else{
			$filedata = $this->upload->data();
			$newfile = md5($filename).strtolower($filedata['file_ext']);
			$dest = $filedata['file_path'].$newfile;

			if(file_exists($dest)) unlink($dest);
			rename($filedata['full_path'],$dest);

			$dest = FCPATH.'/uploadFile/spot/'.$_POST['filetemp'];
			if(file_exists($dest)) unlink($dest);

			$sql = 'update tb_iklan set tipe=?,judul=?,namafile=?,status=?,updatedon=?,updatedby=? where idiklan=? ';
			$this->db->query($sql, array($_POST['tipe'],$_POST['judul'],$newfile,$_POST['status'],$v_date,$username,$_POST['idiklan']));
		}
	}else{
			$sql = 'update tb_iklan set tipe=?,judul=?,status=?,updatedon=?,updatedby=? where idiklan=? ';
			$this->db->query($sql, array($_POST['tipe'],$_POST['judul'],$_POST['status'],$v_date,$username,$_POST['idiklan']));
			//echo  $this->db->last_query();
	}

}


function delete_spot(){
	$dest = FCPATH.'/uploadFile/spot/'.$_POST['filetemp'];
	if(file_exists($dest)) unlink($dest);
	$sql='delete from tb_iklan where idiklan=?';
	$this->db->query($sql, array($_POST['idiklan']));
}
}
?>
