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
        $this->load->view('site/Verify', $output);
    }

    function verify() {
        $accounts_id = $this->input->post('accounts_id');
        $user_code = $this->input->post('rand_code');
        $account_active_code = $this->db->select('account_active_code')
            ->get_where('zgr_accounts', array('accounts_id' => $accounts_id))
            ->row()
            ->account_active_code;

            $mobile = $this->db->select('account_mobile')
            ->get_where('zgr_accounts', array('accounts_id' => $accounts_id))
            ->row()
            ->account_mobile;

            $password = $this->db->select('account_pass')
            ->get_where('zgr_accounts', array('accounts_id' => $accounts_id))
            ->row()
            ->account_pass;

            if($user_code === $account_active_code) {
          
            
                $result = $this->MY_Model->check_login($mobile,$this->encrypt->decode($password));

        
                if ($result) {
                    redirect('site/panel/index');
                } else {
                    redirect('site/Register');
                }
            } else {
                redirect('site/Register');
            }


        
    
    }


}