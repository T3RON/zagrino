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
        $this->load->helper('Accesscontrol');
        $this->load->library('Javascript');
        $this->load->library('Javascript/Jquery');
        $this->load->model('MY_Model');


       
        Accesscontrol_helper::is_logged_in();

      
     


    
        
    }


   



}