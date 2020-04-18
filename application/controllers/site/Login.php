<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Login extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('Menu_Model');
        $this->load->model('MY_Model');
        $this->load->library('ion_auth');
        $this->load->library('Jdf');
        $this->load->library('user_agent');
        $this->load->helper('url');
        $this->load->helper('form');
    }

    function index()
    {
        $output['menu_top'] = $this->Menu_Model->select('menu');
        $output['slider'] = $this->Menu_Model->select('slider');
        $output['menu_middel'] = $this->Menu_Model->select('secend_menu');
        $output['footer_menu'] = $this->Menu_Model->select('footer_menu');
        $output['text'] = $this->Menu_Model->select('text');
        $output['site'] = $this->MY_Model->select_single('site',1);

        // $day = 86400 * 31;
        // $calc_day=time() + ( ( $this->jdf->jdate('t',time(),'','','en') - $this->jdf->jdate('j',time(),'','','en') ) * $day ) + 86400;
        // $curent_day=time();
        
        // echo($curent_day);
        // echo($this->jdf->jdate('l, j F Y',$curent_day,'','GMT'));
        // exit;


        $this->load->vars(array(
            'home_page' => TRUE
        ));
        $output['title'] = "ورود به سامانه";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('site/Login', $output);
    }


}