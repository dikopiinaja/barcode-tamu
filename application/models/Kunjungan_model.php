<?php
class Kunjungan_model extends CI_Model
{
	private $table = 'tamu_detail';
	function __construct() {
		parent::__construct();
	}

	function tamu()
	{
		$tamu = $this->db->get('tamu');
		return $tamu->result();
	}
	
    function listKunjungan(){
		$this->db->select('*');
		$this->db->from('tamu');
		$this->db->join('tamu_detail', 'tamu_detail.nik = tamu.nik', 'left');
		$this->db->join('karyawan', 'karyawan.id_karyawan = tamu.id_karyawan', 'left');

		$query = $this->db->get()->result();
		
		return $query;
	}

	function get_tamu($id){
        $data = array('id_tamu'=>$id);

		$this->db->select('*');
		$this->db->from('tamu');
		$this->db->join('tamu_detail', 'tamu_detail.nik = tamu.nik', 'left');
		$this->db->join('karyawan', 'karyawan.id_karyawan = tamu.id_karyawan', 'left');
        return $this->db->get_where('',$data)->row();
    }

	function tampiltanggal()
	{
		$tgl_berkunjung = date("Y-m-d");
		$this->db->select('*');
		$this->db->from('tamu');
		// $this->db->join('tamu_detail', 'tamu_detail.nik = tamu.nik', 'left');
		$this->db->join('karyawan', 'karyawan.id_karyawan = tamu.id_karyawan', 'left');
		$this->db->join('tamu_detail', 'tamu_detail.nik = tamu.nik', 'left');
        $this->db->like('tgl_berkunjung', $tgl_berkunjung);

       
        return $this->db->get()->result_array();
	}

	function insert($data)
	{
		$data = array(
			'nik'  => $this->input->post('nik'),
			'tgl_kunjungan'  => date('Y-m-d')
		);
		$this->db->insert('tamu_detail',$data);
        return TRUE;
	}

	function update($id, $data)
	{
		$this->db->where('nik',$id);
        $this->db->update('tamu_detail',$data);
	}

	function get_byid($id)
	{
		$this->db->from('tamu');
        $this->db->where('nik',$id);
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            return $query->result();
        }
	}
}