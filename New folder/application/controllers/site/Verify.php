<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Verify extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('Menu_Model');
        $this->load->model('MY_Model');
        $this->load->library('ion_auth');
        $this->load->library('Jdf');
        $this->load->library('user_agent');
        $this->load->library('Sms');
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

        $this->load->vars(array(
            'home_page' => TRUE
        ));
        $output['title'] = "تاييد هويت";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('site/Verify', $output);
    }

    function verify() {
        $data = array( // array assoc
            'kavenegar_api' => '2B467778366639745851642F4C337148556A6D317334484D6A6B566B31446F615554412F647277357562673D',
            'receptor' => '09192183440',
            'number' => '10008003007000',
            'randomNum' => '4444',
            'template' => 'verify'
          );
          
          $this->Sms->verify($data);
    
    }


}