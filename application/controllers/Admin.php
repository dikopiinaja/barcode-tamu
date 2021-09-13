<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");

		if($this->session->userdata('logged_in') !== TRUE){
			redirect('auth');
		}
		$this->load->model('Karyawan_model', 'karyawan');
		$this->load->model('Bagian_model', 'bagian');
		$this->load->model('Petugas_model', 'petugas');
		$this->load->model('Kunjungan_model', 'kunjungan');
		$this->load->model('AuthModel', 'auth');
	}

	public function index()
	{
		$data['petugas'] = $this->auth->listUser();
		$data['title'] = "Dashboard";
		$data['breadcrumb'] = "Dashboard";
		$data['jumlah'] = $this->karyawan->jumlah();
		
		if($this->session->userdata('level')==='1'){
			$this->template->_partialsAdmin('admin/index', $data);
		}else{
			echo "Access Denied";
		}
	}

	function update_user($id= null){
        $data=$this->auth->update_user();
        $this->template->_partialsAdmin('admin/index', $data);
    }

	public function bagian()
	{
		$data['title'] = "Bagian";
		$data['breadcrumb'] = " Data Bagian";
		$data['bagian'] = $this->bagian->listBagian();
		$this->template->_partialsAdmin('admin/bagian/index', $data);
	}

	
	public function tambahBagian()
	{
		$data['title'] = "Bagian";
		$data['breadcrumb'] = " Tambah Bagian";
		
		$this->template->_partialsAdmin('admin/bagian/tambah', $data);
	}
	
	function storeBagian()
	{
		$nama_bagian = $this->input->post('nama_bagian');
		$departemen = $this->input->post('departemen');
		
		$data = array(
			'nama_bagian' => $nama_bagian,
			'departemen' => $departemen
		);
		$this->bagian->tambahBagian($data,'bagian');
		$this->session->set_flashdata('message','<div class="toast swalDefaultSuccess" role="alert">Data Berhasil dihapus !!!</div>');

		redirect('admin/bagian', 'refresh');
	}

	function editBagian($id = null)
	{
		$data['title'] = "Bagian";
		$data['breadcrumb'] = " Data Edit Bagian";
		$bagian = $this->bagian;
		$data["bagian"] = $bagian->getById($id);
		$this->template->_partialsAdmin('admin/bagian/edit', $data);
	}

	function updateBagian($id = null)
	{
		$validation = $this->form_validation;
		$bagian = $this->bagian;
		$validation->set_rules($bagian->rules());
			if ($validation->run()) {
				$bagian->update_bagian();
				$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil diupdate !!!</div>');
				redirect('admin/bagian');
			}
		$data["kategori"] = $kategori->getById($id);
	}

	function delete_bagian($id){
		$id = array('id_bagian' => $id);
		$this->bagian->hapus_bagian('bagian', $id);
		$this->session->set_flashdata('message','<div class="Toast swalDefaultSuccess" role="alert">Data Berhasil dihapus !!!</div>');

		redirect('admin/bagian');
    }

	public function karyawan()
	{
		$data['title'] = "Karyawan";
		$data['breadcrumb'] = "Data Karyawan"; 
		$data['bagian'] = $this->bagian->listBagian();
		$this->template->_partialsAdmin('admin/karyawan/index', $data);
	}

	function listkaryawan(){
		$data = $this->karyawan->listKaryawan();
		echo json_encode($data);
	}

	function save_karyawan(){
		$data=$this->karyawan->save();
        echo json_encode($data);
    }

	function update_karyawan(){
        $data=$this->karyawan->update();
        echo json_encode($data);
    }

	function delete_karyawan(){
		$data=$this->karyawan->delete_karyawan();
        echo json_encode($data);
    }
	
	public function petugas()
	{
		$data['title'] = "Petugas";
		$data['breadcrumb'] = "Data Petugas";
		$this->template->_partialsAdmin('admin/petugas/index', $data);
	}
	
	function listpetugas(){
		$data = $this->petugas->listPetugas();
		echo json_encode($data);
	}

	function save_petugas(){
		$data = $this->petugas->save();
		echo json_encode($data);
    }

	function update_petugas(){
        $data=$this->petugas->update();
        echo json_encode($data);
    }

	function delete_petugas(){
		$data=$this->petugas->delete_petugas();
        echo json_encode($data);
    }

	public function kunjungan()
	{
		$data['title'] = 'Kunjungan';
		$data['breadcrumb'] = 'Data Kunjungan';
		$data['kunjungan'] = $this->kunjungan->listKunjungan();
		$this->template->_partialsAdmin('admin/tamu/index', $data);
	}


	public function user()
	{
		$data['title'] = 'Kunjungan';
		$data['breadcrumb'] = 'Data Kunjungan';
		$data['users'] = $this->auth->listUser();
		$this->template->_partialsAdmin('admin/users/index', $data);
	}

	public function laporan()
	{
		$data['title'] = 'Laporan';
		$data['breadcrumb'] = 'Data Laporan';
		$data['laporan'] = $this->db->get('laporan')->result();
		$this->template->_partialsPetugas('admin/laporan/data_laporan', $data);
	}

	function detail_tamu($id = null)
	{
		$data['title'] = "Tamu";
		$data['breadcrumb'] = " Data Detail Tamu";
		// $bagian = $this->bagian;
		$data["tamu"] = $this->kunjungan->get_tamu($id);
		$this->template->_partialsAdmin('admin/tamu/detail', $data);
	}

	function download($id)
	{
		$data = $this->db->get_where('laporan',['id'=>$id])->row();
		force_download('assets/uploads/'.$data->laporan_pdf,NULL);
	}

}
