<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Register extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('menu_model');
        $this->load->model('MY_Model');
        $this->load->library('ion_auth');
        $this->load->library('Jdf');
        $this->load->library('user_agent');
        $this->load->helper('url');
        $this->load->helper('form');

    }

    function index()
    {
        $output['menu_top'] = $this->menu_model->select('menu');
        $output['slider'] = $this->menu_model->select('slider');
        $output['menu_middel'] = $this->menu_model->select('secend_menu');
        $output['footer_menu'] = $this->menu_model->select('footer_menu');
        $output['text'] = $this->menu_model->select('text');
        $output['site'] = $this->MY_Model->select_single('site',1);

        $this->load->vars(array(
            'home_page' => TRUE
        ));
        $output['title'] = "ثبت نام در سامانه زاگرينو";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('site/Register', $output);
    }

    function register() {
        
    }


}