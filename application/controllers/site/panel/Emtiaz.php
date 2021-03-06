<?php

include_once(APPPATH.'core/CI_Panel.php');
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Emtiaz extends CI_Panel {
    function __construct()
    {
        parent::__construct();


    }

    function index()
    {
   
        $output['menu_top'] = $this->MY_Model->select('menu');
        $output['menu_middel'] = $this->MY_Model->select('secend_menu');
        $output['footer_menu'] = $this->MY_Model->select('footer_menu');
        $output['text'] = $this->MY_Model->select('text');
        $output['site'] = $this->MY_Model->select_single('site','1');


        $output['rate_user'] = $this->db->select('accounts_rate_user')
        ->get_where('zgr_accounts', array('accounts_id' => $this->session->userdata('accounts_id')))
        ->row()
        ->accounts_rate_user;
 
        $this->load->vars(array(
            'home_page' => TRUE
        ));
      
        $output['title'] = "پنل كاربري";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('panel/emtiaz',$output);
    }

    function get_cities() {
        $ostan_id = $this->input->post('id',TRUE);
        $data = $this->MY_Model->select_single_where('city','ostan',$ostan_id);
        echo json_encode($data);
    }


}