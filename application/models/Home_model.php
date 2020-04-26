
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
            echo $this->generatePdf($contest_id);
            return false;
        }
    }
    /**
     * Share Pdf
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
    /**
     *
     */
    public function generatePdf($contest_id) {
         $contest_details = $this->getContestDetails($contest_id);
    }
    /**
     * Gwt Content Deatils
     */
    public function getContestDetails($contest_id) {
        $query=$this->db->query("select question,option_1,option_2,option_3,option_4,correct_answer,description,option_type from contest_question where contest_id=?",array($contest_id));
        $contest=$query->result_array();
        if($contest){
             $this->createPdf($contest, $contest_id);
        }else{
            echo "No Contest Found";
            return;
        }
    }
    /**
     * Generate PDF
     */
    public function createPdf($contest, $contest_id) {
        $contest['contest'] = $contest;
        ini_set('memory_limit', '256M');
        $this->load->library('Mpdf_access');
        ob_start();
        $this->load->view('Contest_pdf',$contest);
        $html = ob_get_contents();
        ob_end_clean();
        //create pdf file of above view -vendor_agreement.php
        $file_data = array();
        $contest_path = 'pdf/contest/';
        $file_name = 'contest_'.date('Y_m_d').'_'.rand(10,100000).'.pdf';
        $path=''.$contest_path.$file_name;
        $file_data = $this->mpdf_access->write_html($path,$html);
        $this->update_contest_url($contest_id,$file_name);
        echo $this->getPdfShare($file_name);
        return;
    }
    /**
     * update_contest_url
     */
    public function update_contest_url($contest_id,$file_name) {
        $data = array(
                'contest_pdf' => $file_name
            );
        $this->db->where('id', $contest_id);
        $this->db->update('contest',$data);
    }

} //end
