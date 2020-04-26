
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Description of Home_model
 *
 * @author Sumit Nair 26-04-2020
 */


class Home_model extends CI_Model{

	 function __construct() {
        parent::__construct();

    }
    /**
     * Get All Contest
     */
    public function getAllContest() {
        $query=$this->db->query("select id as contest_id, contest_name from contest",array());
        $contest=$query->result_array();
        if($contest){
            return $contest;
        }else{
            return false;
        }
    }
    /**
     * Get Contest Pdf Download url
     */
    public function getContestPdf() {
        $contest_id = $_POST['contestId'];
        $query=$this->db->query("select contest_pdf from contest where id=? and contest_pdf IS NOT NULL",array($contest_id));
        $contest=$query->row_array();
        if($contest){
            echo $this->getPdfShare($contest['contest_pdf']);
            return;
        }else{
            return false;
        }
    }
    /**
     *
     */
    public function getPdfShare($contest_pdf) {
        $contest_path = 'pdf/contest/';
        $pdf_url = base_url().$contest_path.$contest_pdf; //pdf complete url
        $data =
        "<p><a data-text='Download Contest' data-link='$pdf_url' class='whatsapp w3_whatsapp_btn w3_whatsapp_btn_large'>
          <i class='fa fa-whatsapp' aria-hidden='true'></i> Share In WhatApp
        </a>
        <a href='$pdf_url' class='pdf w3_pdf_btn w3_whatsapp_btn_large' download><i class='fa fa-file-pdf-o' aria-hidden='true'></i> Download PDF</a>
        </p>";
        return $data;
    }

} //end
