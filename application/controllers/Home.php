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
         $this->load->view('welcome_message');
	}

}