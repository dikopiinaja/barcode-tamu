<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('Main_model', 'main');
	}


	public function index()
	{
		$this->template->_partialsMain('index');
	}

	public function contact()
	{
		$this->template->_partialsMain('contact');
	}

	public function tamu()
	{
		$data['karyawan'] = $this->db->get('karyawan')->result();
		$this->template->_partialsMain('tamu_masuk', $data);
	}

	function storeTamu()
	{
		// $karyawan=$_GET['karyawan'];
        // $datakaryawan= $this->main->getid($karyawan);
        // $id_karyawam = array();
        // foreach($datakaryawan as $row){
        //     $data[] = array("id_karyawan"=>$row->nama_karyawan, "text"=>$row->nama_karyawan);
        // }
        // echo json_encode($id_karyawan);

		$nama_tamu = $this->input->post('nama_tamu');
		$nik = $this->input->post('nik');
		$alamat = $this->input->post('alamat');
		$no_hp_tamu = $this->input->post('no_hp_tamu');
		$karyawan = $this->input->post('id_karyawan');
		$tgl_berkunjung = date('Y-m-d');
		$keperluan = $this->input->post('keperluan');

		$data = array(
					'nama_tamu' => $nama_tamu, 
					'nik' => $nik, 
					'alamat' => $alamat, 
					'no_hp_tamu' => $no_hp_tamu, 
					'id_karyawan' => $karyawan,
					'tgl_berkunjung' => $tgl_berkunjung,
					'keperluan' => $keperluan
				);
		$this->main->tambah_data($data, 'tamu');
		redirect('main', 'refresh');
	}
}
