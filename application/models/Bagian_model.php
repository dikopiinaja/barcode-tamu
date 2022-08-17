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

 //    function tambahBagian($data,$table){
	// 	$this->db->insert($table, $data);
	// }
    function save(){
        $data = array(
            'id_bagian'  => $this->input->post('id_bagian'), 
            'nama_bagian'  => $this->input->post('nama_bagian'), 
            'departemen' => $this->input->post('departemen'), 
        );
        $result=$this->db->insert('bagian',$data);
        return $result;
    }

	function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_bagian" => $id])->row();
    }

	function update()
    {
        $id_bagian=$this->input->post('id_bagian');
        $nama_bagian=$this->input->post('nama_bagian');
        $departemen = $this->input->post('departemen');
 
        $this->db->set('nama_bagian', $nama_bagian);
        $this->db->set('departemen', $departemen);
        $this->db->where('id_bagian', $id_bagian);

        $result=$this->db->update('bagian');
        return $result;
    }

    function delete_bagian(){
        $id_bagian=$this->input->post('id_bagian');
        $this->db->where('id_bagian', $id_bagian);
        $result=$this->db->delete('bagian');
        return $result;
    }
}
