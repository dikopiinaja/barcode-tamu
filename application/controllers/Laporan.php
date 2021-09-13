<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE){
			redirect('auth');
		}
		$this->load->model('Petugas_model', 'petugas');
		$this->load->model('Kunjungan_model', 'kunjungan');
		$this->load->model('AuthModel', 'auth');
		$this->load->model('Laporan_model', 'laporan');
		// require_once __DIR__. 'vendor/autoload.php';
	}

    public function laporanPetugas()
    {
        $data['title'] = 'Laporan';
        $data['breadcrumb'] = 'Laporan Petugas';
		// $data['tahun'] = $this->laporan->tahun();
		$data['tgl_berkunjung'] = date('d-m-Y');

			if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan            
				$filter = $_GET['filter']; // Ambil data filder yang dipilih user            
				if($filter == '1'){ // Jika filter nya 1 (per tanggal)                
					$tgl = $_GET['tanggal'];                                
					$ket = 'Data Transaksi Tanggal '.date('d-m-y', strtotime($tgl));                
					$url_cetak = 'laporan/laporan_pdf?filter=1&tanggal='.$tgl;                
					$transaksi = $this->laporan->laporan_by_date($tgl); // Panggil fungsi laporan_by_date yang ada di laporan            
				}else if($filter == '2'){ // Jika filter nya 2 (per bulan)                
					$bulan = $_GET['bulan'];                
					$tahun = $_GET['tahun'];                
					$nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');                                
					$ket = 'Data Transaksi Bulan '.$nama_bulan[$bulan].' '.$tahun;                
					$url_cetak = 'laporan/laporan_pdf?filter=2&bulan='.$bulan.'&tahun='.$tahun;                
					$transaksi = $this->laporan->laporan_by_month($bulan, $tahun); // Panggil fungsi laporan_by_month yang ada di laporan            
				}else{ // Jika filter nya 3 (per tahun)                
					$tahun = $_GET['tahun'];                                
					$ket = 'Data Transaksi Tahun '.$tahun;                
					$url_cetak = 'laporan/laporan_pdf?filter=3&tahun='.$tahun;                
					$transaksi = $this->laporan->laporan_by_year($tahun); // Panggil fungsi laporan_by_year yang ada di laporan            
				}       
			}else{ // Jika user tidak mengklik tombol tampilkan            
				$ket = 'Semua Data Transaksi';            
				$url_cetak = 'laporan/laporan_pdf';            
				$transaksi = $this->laporan->laporan_all(); // Panggil fungsi laporan_all yang ada di laporan        
			}            
			$data['ket'] = $ket;    
			$data['url_cetak'] = base_url(''.$url_cetak);    
			$data['transaksi'] = $transaksi;        
			$data['option_tahun'] = $this->laporan->option_tahun();
		// $data['kunjungan'] = $this->kunjungan->listKunjungan();
        $this->template->_partialsPetugas('petugas/laporan', $data);
    }

	function laporan_pdf()
	{
		$data['kunjungan'] = $this->kunjungan->listKunjungan();

		if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan            
			$filter = $_GET['filter']; // Ambil data filder yang dipilih user            
			if($filter == '1'){ // Jika filter nya 1 (per tanggal)                
				$tgl = $_GET['tanggal'];                                
				$ket = 'Data Transaksi Tanggal '.date('d-m-y', strtotime($tgl));                
				$transaksi = $this->laporan->laporan_by_date($tgl); // Panggil fungsi laporan_by_date yang ada di laporan            
			}else if($filter == '2'){ // Jika filter nya 2 (per bulan)                
				$bulan = $_GET['bulan'];                
				$tahun = $_GET['tahun'];                
				$nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');                                
				$ket = 'Data Transaksi Bulan '.$nama_bulan[$bulan].' '.$tahun;                
				$transaksi = $this->laporan->laporan_by_month($bulan, $tahun); // Panggil fungsi laporan_by_month yang ada di laporan            
			}else{ // Jika filter nya 3 (per tahun)                
				$tahun = $_GET['tahun'];                                
				$ket = 'Data Transaksi Tahun '.$tahun;                
				$transaksi = $this->laporan->laporan_by_year($tahun); // Panggil fungsi laporan_by_year yang ada di laporan            
			}
		}else{ // Jika user tidak mengklik tombol tampilkan            
			$ket = 'Semua Data Transaksi';            
			$transaksi = $this->laporan->laporan_all(); // Panggil fungsi laporan_all yang ada di laporan        
		}                
		$data['ket'] = $ket;        
		$data['transaksi'] = $transaksi;            
		ob_start();
		// $this->pdf->load_view('admin/laporan/laporan_kunjungan', $data);
		$uc_cetak_laporan;
		ob_end_clean();
				
		$this->load->library('pdf');

		$this->pdf->setPaper('A4', 'landscape');
		$uc_cetak_laporan = $this->pdf->load_view('petugas/laporan_kunjungan', $data);
		$this->pdf->filename = "laporan-kunjungan.pdf";
	}
}