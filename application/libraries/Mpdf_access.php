<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once 'vendor/autoload.php';

class Mpdf_access {
    function __construct()
    {

    }

    public function write_html($path='',$html=''){
        $ci = & get_instance();
        $mpdf = new \Mpdf\Mpdf(['tempDir' => __DIR__ . '/tmp']);

        $mpdf->WriteHTML($html); // write the HTML into the PDF
        $output = FCPATH.$path;
        $mpdf->Output("$output", 'F');
    }
}