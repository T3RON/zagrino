<?php

include_once(APPPATH.'core/CI_Panel.php');
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Show_panel extends CI_Panel {
    function __construct()
    {
        parent::__construct();


    }

    function index()
    {
   
        $output['menu_top'] = $this->Menu_Model->select('menu');
        $output['menu_middel'] = $this->Menu_Model->select('secend_menu');
        $output['footer_menu'] = $this->Menu_Model->select('footer_menu');
        $output['text'] = $this->Menu_Model->select('text');
        $output['site'] = $this->MY_Model->select_single('site','1');



        $output['agahi'] = $this->MY_Model->g_count_where('agahi','accounts_id',$this->session->userdata('accounts_id'));
        $output['jobs'] = $this->MY_Model->g_count_where('jobs','accounts_id',$this->session->userdata('accounts_id'));
        $output['events'] = $this->MY_Model->g_count_where('events','accounts_id',$this->session->userdata('accounts_id'));
        $output['shop'] = $this->MY_Model->g_count_where('shop','accounts_id',$this->session->userdata('accounts_id'));
        $output['takhfif'] = $this->MY_Model->g_count_where('takhfif','accounts_id',$this->session->userdata('accounts_id'));
        $output['gardeshgari'] = $this->MY_Model->g_count_where('gardeshgari','accounts_id',$this->session->userdata('accounts_id'));

        $this->load->vars(array(
            'home_page' => TRUE
        ));
      
        $output['title'] = "پنل كاربري";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('panel/ShowPanel',$output);
    }

    function get_cities() {
        $ostan_id = $this->input->post('id',TRUE);
        $data = $this->MY_Model->select_single_where('city','ostan',$ostan_id);
        echo json_encode($data);
    }


}