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
        /**
         * Home view/Front Page
         *
         */
        public function index()
        {
                $data = array();
                $data['all_contest'] = $this->Home_model->getAllContest();
                $this->load->view('Home',$data);
        }
        /**
         * Contest PDF
         */
        public function contestPdf(){
                $this->load->view('Contest_pdf');
        }
        public function test(){
                $this->load->view('Front_page');
        }
        /**
         * Get Contest Pdf
         */
        public function getContestPdf() {
                $this->Home_model->getContestPdf();
        }

}