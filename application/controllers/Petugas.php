<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE){
			redirect('auth');
		}
		$this->load->model('Karyawan_model', 'karyawan');
		$this->load->model('Petugas_model', 'petugas');
		$this->load->model('AuthModel', 'auth');
		$this->load->model('Kunjungan_model', 'kunjungan');
	}

	public function index()
	{
		$data['title'] = 'Petugas';
		$data['breadcrumb'] = 'Petugas';
		$data['profile'] = $this->petugas->get_id();
		$data['tamu_h'] = $this->kunjungan->tampiltanggal();


		if($this->session->userdata('level')==='2'){
			$this->template->_partialsPetugas('petugas/index', $data);
		}else{
			echo "Access Denied";
		}
	}

	public function profile()
	{

		$data['title'] = 'Petugas';
		$data['breadcrumb'] = 'Profile Petugas';
		// var_dump($petugas);
		$this->template->_partialsPetugas('petugas/profile', $data);
	}

	public function karyawan()
	{
		$data['title'] = 'Petugas';
		$data['breadcrumb'] = 'Data Karyawan';
		$this->template->_partialsPetugas('petugas/karyawan', $data);
	}

	function listkaryawan()
	{
		$data = $this->karyawan->listKaryawan();
		echo json_encode($data);
	}

	public function kunjungan()
	{
		$data['title'] = 'Kunjungan';
		$data['breadcrumb'] = 'Data Kunjungan';
		$data['kunjungan'] = $this->kunjungan->listKunjungan();
		$data['tamu_h'] = $this->kunjungan->tampiltanggal();

		$this->template->_partialsPetugas('petugas/kunjungan', $data);
	}

	function kunjungan_tamu($id)
	{
		$to = $this->uri->segment(3);
		$id = $this->uri->segment(4);
		$tgl = date('Y-m-d');
		$waktu = date('H:i:s');
	   	if ($to=="checkin") {
			$data1 = $this->kunjungan->get_byid($id);
				// foreach ($data1 as $tamu){
				// 	$nik = $tamu->nik;
				// }
					$data=array(
						// 'nik'=>$nik,
						// 'tgl_kunjungan'=>$tgl,
						'jam_masuk'=>$waktu
						// 'Status'=>'Hadir'
					);
					$this->kunjungan->update($id,$data);
					redirect('petugas');
				} elseif ($to=="checkout"){
						
					$data=array(
						'jam_keluar'=>$waktu,
					);
					$this->kunjungan->update($id,$data);
					redirect('petugas');
				}
	}

	public function laporan()
	{
		$data['title'] = 'Laporan';
		$data['breadcrumb'] = 'Data Laporan';
		$data['laporan'] = $this->db->get('laporan')->result();
		$this->template->_partialsPetugas('petugas/data_laporan', $data);
	}

	public function kirim_laporan()
	{
		$data['title'] = 'Laporan';
		$data['breadcrumb'] = 'Kirim Laporan';
		$this->template->_partialsPetugas('petugas/kirim_laporan', $data);
	}

	function kirim()
	{
		$config['upload_path']          = './assets/uploads/';
		$config['allowed_types']        = 'gif|jpg|png|pdf';
		$config['max_size']             = 1024;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
		$config['encrypt_name']			= TRUE;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('laporan_pdf'))
		{
			$data['title'] = 'Laporan';
			$data['breadcrumb'] = 'Kirim Laporan';
			$error = array('error' => $this->upload->display_errors());
			$this->template->_partialsPetugas('petugas/kirim_laporan', $data);
		}
		else
		{
			$data['laporan_pdf'] = $this->upload->data("file_name");
			$data['description'] = $this->input->post('description');
			$this->db->insert('laporan',$data);
			redirect('petugas/laporan');
		}
	}

	function download($id)
	{
		$data = $this->db->get_where('laporan',['id'=>$id])->row();
		force_download('assets/uploads/'.$data->laporan_pdf,NULL);
	}

	function detail_tamu($id = null)
	{
		$data['title'] = "Tamu";
		$data['breadcrumb'] = " Data Detail Tamu";
		// $bagian = $this->bagian;
		$data["tamu"] = $this->kunjungan->get_tamu($id);
		$this->template->_partialsPetugas('petugas/detail', $data);
	}

}
