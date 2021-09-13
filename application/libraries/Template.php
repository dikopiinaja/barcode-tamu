<?php
class Template{
    protected $_ci;
    
    function __construct(){
        $this->_ci = &get_instance();
    }
    
  function _partialsMain($content, $data = NULL){
    /*
     * $data['headernya'] , $data['contentnya'] , $data['footernya']
     * variabel diatas ^ nantinya akan dikirim ke file views/template/index.php
     * */
        $data['main_head'] = $this->_ci->load->view('templates/main_head', $data, TRUE);
        $data['main_navbar'] = $this->_ci->load->view('templates/main_navbar', $data, TRUE);
        $data['main_content'] = $this->_ci->load->view($content, $data, TRUE);
        $data['main_footer'] = $this->_ci->load->view('templates/main_footer', $data, TRUE);
        
        $this->_ci->load->view('templates/main_index', $data);
    }

  function _partialsAdmin($content, $data = NULL){
    /*
     * $data['headernya'] , $data['contentnya'] , $data['footernya']
     * variabel diatas ^ nantinya akan dikirim ke file views/template/index.php
     * */
        $data['header'] = $this->_ci->load->view('templates/header', $data, TRUE);
        $data['sidebar'] = $this->_ci->load->view('templates/sidebar', $data, TRUE);
        $data['content'] = $this->_ci->load->view($content, $data, TRUE);
        $data['footer'] = $this->_ci->load->view('templates/footer', $data, TRUE);
        
        $this->_ci->load->view('templates/index', $data);
    }

  function _partialsPetugas($content, $data = NULL){
    /*
     * $data['headernya'] , $data['contentnya'] , $data['footernya']
     * variabel diatas ^ nantinya akan dikirim ke file views/template/index.php
     * */
        // $data = $this->_ci->fungsi->user_login($data, TRUE);
        $data['header'] = $this->_ci->load->view('templates/header', $data, TRUE);
        $data['sidebar'] = $this->_ci->load->view('templates/sidebar', $data, TRUE);
        $data['content'] = $this->_ci->load->view($content, $data, TRUE);
        $data['footer'] = $this->_ci->load->view('templates/footer', $data, TRUE);
        
        $this->_ci->load->view('templates/index', $data);
    }
}