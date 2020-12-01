<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Agahi_Payment extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Model_Api');
		$this->load->library('Jdf');
        $merchant_id = $this->db->select('set_value')
            ->get_where('zgr_settings', array('set_id' => '1'))
            ->row()
            ->set_value;
        $this->load->library('Zarinpal', ['merchant_id' => $merchant_id]);
    }

    public function agahi() {

		$accounts_id = $this->session->userdata('accounts_id');
		$agahi_id = $this->uri->segment(4);

        $amount =  $this->db->select('price_amount')
			->get_where('price', array('price_id' => '1'))
			->row()
			->price_amount;

        $desc = "پرداخت هزینه آگهی ویژه زاگرینو";
        $mobile = $this->db->select('account_mobile')
			->get_where('zgr_accounts', array('accounts_id' => $accounts_id))
			->row()
			->account_mobile;
        $call_back = base_url('')."site/Agahi/Agahi_Payment/callback_agahi?amount=$amount&mobile=$mobile&state_id=$state_id&accounts_id=$accounts_id&agahi_id=$agahi_id";


        $this->zarinpal->sandbox();

        if ($this->zarinpal->request($amount, $desc, $call_back)) {

            $authority = $this->zarinpal->get_authority();
            $this->zarinpal->redirect();

        } else {
            // Unable to connect to gateway
            echo $this->zarinpal->get_error();
        }

    }

    public function callback_agahi() {
        $amount = $this->input->get('amount', TRUE);;
        $status = $this->input->get('Status', TRUE);
        $authority = $this->input->get('Authority', TRUE);
        $mobile = $this->input->get('mobile', TRUE);
        $accounts_id = $this->input->get('accounts_id', TRUE);
		$agahi_id = $this->input->get('agahi_id', TRUE);

        if ($status !== 'OK' OR $authority === NULL)
        {
            echo "پرداخت کنسل شد";
            // payment canceled by user
        }else {
            //$ref_id = $this->zarinpal->get_ref_id();
            // payment succeeded, do database stuff

            $data = array(
                'accounts_id' => $accounts_id,
                'authority' => $authority,
                'mobile' => $mobile,
                'Status' => $status,
                'amount' => $amount,
                'agahi_id' => $agahi_id,
                'pay_date'=> $this->jdf->jdate('l, j F Y',time(),'','GMT')
            );

            $this->Model_Api->Insert("agahi_pay",$data);


			//$this->Model_Api->update_state_request($people_id,'agahi_id',$agahi_id,'1','request');

			redirect('site/panel/Agahi');


        }

    }




	}