<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                // constructor
                $this->load->library('form_validation');
                $this->load->library('email');
        }

	public function index()
	{
         $this->load->view('Home');
    }
    /**
     *
     */
     public function contestPdf(){
         $this->load->view('Contest_pdf');
     }
     /**
      *
      */
      public function generate_pdf() {
        ini_set('memory_limit', '256M');
        $this->load->library('Mpdf_access');
        ob_start();
        $this->load->view('Contest_pdf');
        $html = ob_get_contents();
        ob_end_clean();
        //create pdf file of above view -vendor_agreement.php
        $file_data = array();
        $contest_path = 'pdf/contest/';
        $path=''.$contest_path.'contest_'.date('Y_m_d').'_'.rand(10,100000).'.pdf';
        $file_data = $this->mpdf_access->write_html($path,$html);
        print_r($file_data);
      }

      public function test(){
        $this->load->view('Front_page');
      }

}