<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Index extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->library('javascript');
        $this->load->library('javascript/jquery');
    }

    function index()
    {
   

      
        // $output['title'] = "كاربران";
        // $output['des'] = "مديريت و بررسي كاربران";
        // $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('site/index');
    }


}