<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 10/04/2019
 * Time: 12:21 AM
 */

class CI_Panel extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('Jdf');
        $this->load->library('user_agent');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('javascript');
        $this->load->library('javascript/jquery');
        $this->load->model('Menu_Model');
        $this->load->model('MY_Model');

       
        if($this->check_logged() == false) {
            redirect(site_url().'/site/panel/Index');
        }else {
     
            redirect(site_url().'/site/Login');
        }

      



    
        
    }


    function check_logged() {
                 
        if (!$this->session->userdata('logged_in'))  {
            return false ;  
        }else {
             return true; 
        }
    }



}