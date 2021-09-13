<?php
class Karyawan_model extends CI_Model
{
    function listKaryawan(){
		// $list=$this->db->get('karyawan');
		// return $list->result();
		$this->db->select('*');
		$this->db->from('karyawan');
		$this->db->join('bagian', 'bagian.id_bagian = karyawan.bagian');
		$query = $this->db->get();
		
		return $query->result();
	}

	function jumlah()
	{
		$this->db->count_all('karyawan');
	}

	function save()
	{
		$data = array(
			'id_karyawan'  => $this->input->post('id_karyawan'), 
			'nama_karyawan'  => $this->input->post('nama_karyawan'), 
			'bagian' => $this->input->post('bagian'), 
			'kontrak' => $this->input->post('kontrak'), 
			'jk' => $this->input->post('jk'), 
			'ttl' => $this->input->post('ttl'), 
			'no_hp' => $this->input->post('no_hp'), 
		);
		$result=$this->db->insert('karyawan',$data);
		return $result;
	}

	function update()
	{
		$id_karyawan=$this->input->post('id_karyawan');
        $nama_karyawan=$this->input->post('nama_karyawan');
		$bagian = $this->input->post('bagian'); 
		$kontrak = $this->input->post('kontrak'); 
		$jk = $this->input->post('jk'); 
		$ttl = $this->input->post('ttl'); 
		$no_hp = $this->input->post('no_hp'); 
 
        $this->db->set('nama_karyawan', $nama_karyawan);
        $this->db->set('bagian', $bagian);
        $this->db->set('kontrak', $kontrak);
        $this->db->set('jk', $jk);
        $this->db->set('ttl', $ttl);
        $this->db->set('no_hp', $no_hp);
		$this->db->where('id_karyawan', $id_karyawan);
        $result=$this->db->update('karyawan');
        return $result;
	}

	function delete_karyawan(){
        $id_karyawan=$this->input->post('id_karyawan');
        $this->db->where('id_karyawan', $id_karyawan);
        $result=$this->db->delete('karyawan');
        return $result;
    }
}
