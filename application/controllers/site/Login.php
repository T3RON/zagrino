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
        $this->load->library('session');
        $this->load->library('encrypt');
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
        $rand = rand(1000,9999);
        
        if($account_pass == $re_account_pass) {
            $data = array(
                'account_mobile' => $this->input->post('account_mobile'),
                'account_pass' => $this->encrypt->encode($this->input->post('account_pass')),
                'state_id' => $this->input->post('state_id'),
                'account_active_code' => $rand,
                'register_date' => time(),
                'update_date' =>''
            );
    
             $result = $this->MY_Model->insert('accounts',$data);
             if($result) {
                $data = array( // array assoc
                    'kavenegar_api' => '2B467778366639745851642F4C337148556A6D317334484D6A6B566B31446F615554412F647277357562673D',
                    'receptor' => $this->input->post('account_mobile'),
                    'number' => '10008003007000',
                    'randomNum' => $rand,
                    'template' => 'verify'
                  );
                  
                  $this->verify($data);
                redirect('site/Verify/index/'.$this->db->insert_id());
             }else {
                redirect('site/Login');
             }
             
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
            }else {
                redirect('site/Register');
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

    function verify($verify_params) {
        try {
            $url = 'http://api.kavenegar.com/v1/'.$verify_params['kavenegar_api'].'/verify/lookup.json?receptor=' . $verify_params['receptor'] . '&sender=' . $verify_params['number'] . '&token='. $verify_params['randomNum'].'&template='. $verify_params['template'];	
            json_decode(file_get_contents($url), true);
        } catch (Exception $e) {
            //alert the user.
            var_dump($e->getMessage());
        }
    }


}