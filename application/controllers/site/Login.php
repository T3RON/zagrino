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
        if( $this->session->userdata('logged_in')) {
            redirect('site/panel/index');
        }else {
        $output['menu_top'] = $this->menu_model->select('menu');
        $output['slider'] = $this->menu_model->select('slider');
        $output['menu_middel'] = $this->menu_model->select('secend_menu');
        $output['footer_menu'] = $this->menu_model->select('footer_menu');
        $output['text'] = $this->menu_model->select('text');
        $output['site'] = $this->MY_Model->select_single('site',1);




        // $day = 86400 * 31;
        // $calc_day=time() + ( ( $this->jdf->jdate('t',time(),'','','en') - $this->jdf->jdate('j',time(),'','','en') ) * $day ) + 86400;
        // $curent_day=time() + (5 * 86400);
        
        // echo($curent_day);
        // //echo($this->jdf->jdate('l, j F Y',$curent_day,'','GMT'));
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

    function register() {

        $account_pass = trim($this->input->post('account_pass'));
        $re_account_pass = trim($this->input->post('re_account_pass'));
        
        if($account_pass == $re_account_pass) {
            $data = array(
                'account_mobile' => $this->input->post('account_mobile'),
                'account_pass' => password_hash($this->input->post('account_pass'), PASSWORD_BCRYPT),
                'account_level' => $this->input->post('account_level'),
                'state_id' => $this->input->post('state_id'),
                'register_date' => time(),
                'update_date' =>''
            );
    
             $this->MY_Model->insert('accounts',$data);
             redirect('site/panel');
        }else {
            redirect('site/Login');
        }


    }

    function login() {
     
            $mobile = $this->input->post('mobile');
            $password = $this->input->post('password');
        
            $result = $this->MY_Model->check_login($mobile,$password);
    
            if ($result) {
                redirect('site/panel/index');
            } else {
                redirect('Register');
            }
    
        
 
    }

    
    function signout() {
        $session_data = array(
            'accounts_id'=> '',
            'account_fn'=> '',
            'account_ln'=> '',
            'account_mobile'=> '',
            'account_avatar'=> '',
            'state_id'=> '',
            'logged_in'=> False
        );
        $this->session->unset_userdata($session_data);
        $this->session->sess_destroy();
        redirect('Index');
    }


}