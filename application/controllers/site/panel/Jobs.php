<?php

include_once(APPPATH.'core/CI_Panel.php');
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Jobs extends CI_Panel {
    function __construct()
    {
        parent::__construct();


    }

    function index()
    {
   
        $output['menu_top'] = $this->Menu_Model->select('menu');
        $output['menu_middel'] = $this->Menu_Model->select('secend_menu');
        $output['footer_menu'] = $this->Menu_Model->select('footer_menu');
        $output['slider'] = $this->Menu_Model->select('slider');
        $output['text'] = $this->Menu_Model->select('text');
        $output['site'] = $this->MY_Model->select_single('site','1');
        $output['jobs'] = $this->MY_Model->show_join_six('jobs','jobs_cate','jobs_sub_cate','accounts','ostan','city','state','zgr_jobs.accounts',$this->session->userdata('accounts_id'));




      
        $output['title'] = "پنل كاربري";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('site/Pjobs',$output);
    }

    function show() {

    }

    function edit() {

    }


    function delete() {
echo "sdsdss";
    }

 


}