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
        $this->load->helper('Message');

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
        $id = $this->uri->segment(5);
        $output['menu_top'] = $this->Menu_Model->select('menu');
        $output['menu_middel'] = $this->Menu_Model->select('secend_menu');
        $output['footer_menu'] = $this->Menu_Model->select('footer_menu');
        $output['slider'] = $this->Menu_Model->select('slider');
        $output['text'] = $this->Menu_Model->select('text');
        $output['site'] = $this->MY_Model->select_single('site','1');
        $output['ostan'] = $this->MY_Model->select('ostan');
        $output['jobs'] = $this->MY_Model->show_join_six('jobs','jobs_cate','jobs_sub_cate','accounts','ostan','city','state','zgr_jobs.jobs',$id);




      
        $output['title'] = "پنل كاربري";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('site/Pejobs',$output);
    }


    function delete() {
        $id = $this->uri->segment(5);
        $query = $this->MY_Model->delete('jobs',$id);
    
        if($query) {
            Message_helper::message('موفقيت','ركورد مورد نظر با موفقيت حذف شد','success','site/panel/Jobs');
        }else {
            Message_helper::message('خطا','مشكلي در حذف ركورد بوجود آمده ','error','site/panel/Jobs');
        }
    
        

    }

    function get_cities() {
        $ostan_id = $this->input->post('id',TRUE);
        $data = $this->MY_Model->select_single_where('city','ostan',$ostan_id);
        echo json_encode($data);
    }

 


}