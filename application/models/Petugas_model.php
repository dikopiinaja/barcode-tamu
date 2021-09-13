<?php
class Petugas_model extends CI_Model
{
    function listPetugas(){
		$list=$this->db->get('petugas');
		return $list->result();
	}

	function get_id()
    {
        $this->db->where('petugas.id_petugas', $this->session->userdata('id_petugas'));
        return $this->db->get('petugas')->result();
    }

    function save()
    {
        $data = array(
            'id_petugas'  => $this->input->post('id_petugas'), 
            'nama_petugas'  => $this->input->post('nama_petugas'),  
            'jk' => $this->input->post('jk'), 
            'alamat' => $this->input->post('alamat'), 
            'no_hp' => $this->input->post('no_hp'), 
        );
        $result=$this->db->insert('petugas',$data);
        return $result;
    }

    function update()
	{
		$id_petugas=$this->input->post('id_petugas');
        $nama_petugas=$this->input->post('nama_petugas');
		$jk = $this->input->post('jk'); 
		$alamat = $this->input->post('alamat'); 
		$no_hp = $this->input->post('no_hp'); 
 
        $this->db->set('nama_petugas', $nama_petugas);
        $this->db->set('jk', $jk);
        $this->db->set('alamat', $alamat);
        $this->db->set('no_hp', $no_hp);
		$this->db->where('id_petugas', $id_petugas);
        $result=$this->db->update('petugas');
        return $result;
	}

    function delete_petugas(){
        $id_petugas=$this->input->post('id_petugas');
        $this->db->where('id_petugas', $id_petugas);
        $result=$this->db->delete('petugas');
        return $result;
    }
}
