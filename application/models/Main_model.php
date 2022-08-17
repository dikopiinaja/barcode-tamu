<?php 
class Main_model extends CI_Model
{
    function tambah_data($data)
    {
        $this->db->insert('tamu', $data);
    }

    // function data_karyawan()
    // {
    //     $this->db->select('id_karyawan, nama_karyawan');
    //     $query = $this->db->get('karyawan');
    //     $result = $query->result();
    //     return $result;
    // }

    function getKaryawan($searchTerm=""){

     // Fetch users
     $this->db->select('*');
     $this->db->where("nama_karyawan LIKE '%".$searchTerm."%' ");
     $fetched_records = $this->db->get('karyawan');
     $karyawans = $fetched_records->result_array();

     // Initialize Array with fetched data
     $data = array();
     foreach($karyawans as $kry){
        $data[] = array("id"=>$kry['id_karyawan'], "text"=>$kry['nama_karyawan']);
     }
     return $data;
  }

    // function tambah_data($nama_tamu, $nik, $alamat, $no_hp_tamu, $id_karyawan,$tgl_berkunjung, $keperluan)
    // {
    //     $query="INSERT INTO `tamu`( `nama_tamu`, `nik`, `alamat`,`no_hp_tamu`,`id_karyawan`,`tgl_berkunjung`, `keperluan`) 
    //     VALUES ('$nama_tamu','$nik','$alamat','$no_hp_tamu', '$id_karyawan', '$keperluan')";
    //     $this->db->query($query);
    // }

    function getid($karyawan)
    {
        $this->db->like('nama_karyawan', $karyawan);
        $query = $this->db->select("nama_karyawan")->get('karyawan');
        $listkaryawan = $query->result();
        return $listkaryawan;
    }
    
}

?>