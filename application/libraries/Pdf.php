<?php defined('BASEPATH') OR exit('No direct script access allowed');

use Dompdf\Dompdf;
require_once(APPPATH. 'views/vendor/autoload.php');

class Pdf extends Dompdf{
    /**
     * PDF filename
     * @var String
     */
    public $filename;
    public function __construct(){
        parent::__construct();
        $this->filename = "Laporan Tamu Mess Srikandi.pdf";
    }
    protected function ci()
    {
        return get_instance();
    }

    public function load_view($view, $data = array()){
        $html = $this->ci()->load->view($view, $data, TRUE);
        $this->load_html($html);
        // Render the PDF
        $this->render();
        $this->stream($this->filename, array("Attachment" => FALSE));
    }
}