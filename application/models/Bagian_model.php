<?php
class Bagian_model extends CI_Model
{
	private $_table = "bagian";

	public function rules()
    {
        return [
            ['field' => 'nama_bagian',
            'label' => 'Bagian',
            'rules' => 'required'],

            ['field' => 'departemen',
            'label' => 'Departemen',
            'rules' => 'required']
        ];
    }

    function listBagian(){
		$list=$this->db->get('bagian');
		return $list->result();
	}

    function tambahBagian($data,$table){
		$this->db->insert($table, $data);
	}

	function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_bagian" => $id])->row();
    }

	function update_bagian()
    {
        $post = $this->input->post();
		
		$this->id_bagian =$post['id'];
		$this->nama_bagian =$post['nama_bagian'];
		$this->departemen =$post['departemen'];
		$this->db->update($this->_table, $this, array('id_bagian' => $post['id']));
    }

	function hapus_bagian($table, $where)
    {
        return $this->db->delete($table, $where);
    }
}
