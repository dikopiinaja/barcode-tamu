<?php 
class AuthModel extends CI_Model
{
    function listUser(){
		$this->db->select('*');
        $this->db->join('petugas', 'users.id_petugas = petugas.id_petugas');
        $this->db->from('users');
        $query = $this->db->get();
        return $query->result();
	}

    public function getAuth($email, $password)
    {
        $this->db->where('email',$email);
        $this->db->where('password',$password);
        $result = $this->db->get('users',1);
        return $result;
    }
    
    function get_id()
    {
        $this->db->select('
        users.*, petugas.id_petugas AS id_petugas, petugas.nama_petugas, ');
        $this->db->join('petugas', 'users.id_petugas = petugas.id_petugas');
        $this->db->from('users');
        $query = $this->db->get();
        return $query->result();
    }

    function update_user(){
        // $id = $this->input->post('id');

        // $status = $this->db->select('status')->where('id_user', $id)->get('users')->row()->status;
        // if($status == 0)
        // {
        //     $status = 0;
        // } else 
        // {
        //     $status = 1;
        // }
        // $data = array('status' => $status);
        // $this->db->where('id_user', $id);
        // $this->db->update('users',$data);
        // echo TRUE;exit;
        $data = array(
            'status' => $status
        );
        // $id_user=$this->input->post('id_user');
        // $status =$this->input->post('status');
 
        $this->db->set($data);
        $this->db->insert('users');
        // $result=$this->db->update('users');
        // return $result;
    }
}

?>