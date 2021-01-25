<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Ops extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Api');
        $this->load->model('MY_Model');
        $this->load->library('ion_auth');
        $this->load->library('Jdf');
        $this->load->library('user_agent');
        $this->load->library('Sms');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('encrypt');
    }

    function index()
    {
        $output['menu_top'] = $this->MY_Model->select('menu');
        $output['slider'] = $this->MY_Model->select('slider');
        $output['menu_middel'] = $this->MY_Model->select('secend_menu');
        $output['footer_menu'] = $this->MY_Model->select('footer_menu');
        $output['text'] = $this->MY_Model->select('text');
        $output['site'] = $this->MY_Model->select_single('site',1);

        $this->load->vars(array(
            'home_page' => TRUE
        ));
        $output['title'] = "تاييد هويت";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('site/401', $output);
    }


        


}