<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('Main_model', 'main');
		$this->load->model('Kunjungan_model', 'kunjungan');
		
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
		$karyawan = $this->input->post('karyawan');
		$tgl_berkunjung = date('Y-m-d');
		$tgl_kunjungan = date('Y-m-d');
		$keperluan = $this->input->post('keperluan');

		$data = array(
					'nama_tamu' => $nama_tamu, 
					'nik' => $nik, 
					'alamat' => $alamat, 
					'no_hp_tamu' => $no_hp_tamu, 
					'id_karyawan' => $karyawan,
					'tgl_berkunjung' => $tgl_berkunjung,
					'keperluan' => $keperluan,
				);
		$this->main->tambah_data($data, 'tamu');

		$this->kunjungan->insert($data);
		// $merge = array_push($data1,$data2);

		echo json_encode($data); 
		// redirect('main', 'refresh');
	}

	function dataKaryawan()
	{
		// $searchTerm=$_GET['searchTerm'];
        // $this->load->model('Main_model');
        // $data= $this->main->data_karyawan();
        // $data = array();
        // foreach($data as $row){
        //     $data[] = array("id_karyawan"=>$row->nama_karyawan, "nama_karyawan"=>$row->nama_karyawan);
        // }
        // echo json_encode($data);
          // Search term
	      $searchTerm = $this->input->post('searchTerm');

	      // Get users
	      $response = $this->main->getKaryawan($searchTerm);

	      echo json_encode($response);
	}

	function storeDataTamu()
	{
		// $karyawan=$_GET['karyawan'];
        // $datakaryawan= $this->main->getid($karyawan);
        // $id_karyawam = array();
        // foreach($datakaryawan as $row){
        //     $data[] = array("id_karyawan"=>$row->nama_karyawan, "text"=>$row->nama_karyawan);
        // }
        // echo json_encode($id_karyawan);

        if ($this->input->post() == '') {
        	$nama_tamu = $this->input->post('nama_tamu');
			$nik = $this->input->post('nik');
			$alamat = $this->input->post('alamat');
			$no_hp_tamu = $this->input->post('no_hp_tamu');
			$karyawan = $this->input->post('id_karyawan');
			$tgl_berkunjung = date('Y-m-d');
			$keperluan = $this->input->post('keperluan');
			$this->main->tambah_data($nama_tamu, $nik, $alamat, $no_hp_tamu, $karyawan, $tgl_berkunjung,$keperluan);
        }

		

		// $data = array(
		// 			'nama_tamu' => $nama_tamu, 
		// 			'nik' => $nik, 
		// 			'alamat' => $alamat, 
		// 			'no_hp_tamu' => $no_hp_tamu, 
		// 			'id_karyawan' => $karyawan,
		// 			'tgl_berkunjung' => $tgl_berkunjung,
		// 			'keperluan' => $keperluan
		// 		);
		// $this->main->tambah_data($data, 'tamu');
		

		// redirect('main', 'refresh');
	}
}
