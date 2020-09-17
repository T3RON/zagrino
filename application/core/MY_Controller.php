<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 10/04/2019
 * Time: 12:21 AM
 */

class MY_Controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('ion_auth');
        $this->load->library('Jdf');
        $this->load->library('user_agent');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('form');



        $this->load->vars(array(
            'home_page' => FALSE
        ));
        $this->load->model('MY_Model');

        if (!$this->ion_auth->logged_in())
        {
            redirect('auth/login');
        }else {
         
            $session_data = array(
                'first_name'=> $this->ion_auth->user()->row()->first_name,
                'last_name'=> $this->ion_auth->user()->row()->last_name
            );

            $this->session->sess_expiration = '14400';
            $this->session->set_userdata($session_data);
        }
        
    }



}