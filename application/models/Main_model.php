<?php 
class Main_model extends CI_Model
{
    function tambah_data($data,$table)
    {
        $this->db->insert($table, $data);
    }

    function getid($karyawan)
    {
        $this->db->like('nama_karyawan', $karyawan);
        $query = $this->db->select("nama_karyawan")->get('karyawan');
        $listkaryawan = $query->result();
        return $listkaryawan;
    }
    
}

?>