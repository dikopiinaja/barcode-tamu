<?php 
class Auth extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->model('AuthModel', 'auth');
    }

    function index()
    {
        $data['title'] = 'Login System';
        $this->load->view('auth', $data);
    }

    function logproccess(){
        $email    = $this->input->post('email',TRUE);
        $password = md5($this->input->post('password',TRUE));
        $validate = $this->auth->getAuth($email,$password);
        if($validate->num_rows() > 0 ){
            $data  = $validate->row_array();
            $name  = $data['username'];
            $email = $data['email'];
            $level = $data['level'];
            $id_petugas = $data['id_petugas'];
            $sesdata = array(
                'username'  => $name,
                // 'nama_petugas'  => $nama_petugas,
                'email'     => $email,
                'level'     => $level,
                'id_petugas'     => $id_petugas,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($sesdata);
            // access login for admin
            if($level === '1'){
                redirect('admin');
            // access login for author
            }else{
                redirect('petugas');
            }
        }else{
            echo $this->session->set_flashdata('msg','Username or Password is Wrong');
            redirect('auth');
        }
      }
     
      function logout(){
          $this->session->sess_destroy();
          redirect('auth');
      }
}
?>