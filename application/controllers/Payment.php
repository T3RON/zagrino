<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Payment extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Model_Api');
		$this->load->library('Jdf');
        $merchant_id = $this->db->select('set_value')
            ->get_where('settings', array('set_id' => '2'))
            ->row()
            ->set_value;
        $this->load->library('Zarinpal', ['merchant_id' => $merchant_id]);
    }

    public function program() {

		$people_id = $this->session->userdata('people_id');
		$request_id = $this->db->select('request_id')
			->get_where('request', array('people_id' => $people_id,'state_id' => '1'))
			->row()
			->request_id;
        $amount =  $this->db->select('hazine_price')
			->get_where('hazine', array('hazine_id' => '1'))
			->row()
			->hazine_price;

        $desc = "پرداخت هزينه برنامه ورزشي";
        $mobile = $this->db->select('phone_number')
			->get_where('people', array('people_id' => $people_id))
			->row()
			->phone_number;
        $call_back = base_url('')."payment/callback_program?amount=$amount&mobile=$mobile&people_id=$people_id&request_id=$request_id";


        $this->zarinpal->sandbox();

        if ($this->zarinpal->request($amount, $desc, $call_back)) {

            $authority = $this->zarinpal->get_authority();
            $this->zarinpal->redirect();

        } else {
            // Unable to connect to gateway
            echo $this->zarinpal->get_error();
        }

    }

    public function callback_program() {
        $amount = $this->input->get('amount', TRUE);;
        $status = $this->input->get('Status', TRUE);
        $authority = $this->input->get('Authority', TRUE);
        $mobile = $this->input->get('mobile', TRUE);
        $people_id = $this->input->get('people_id', TRUE);
		$request_id = $this->input->get('request_id', TRUE);

        if ($status !== 'OK' OR $authority === NULL)
        {
            echo "پرداخت کنسل شد";
            // payment canceled by user
        }else {
            //$ref_id = $this->zarinpal->get_ref_id();
            // payment succeeded, do database stuff

            $data = array(
                'people_id' => $people_id,
                'authority' => $authority,
                'mobile' => $mobile,
                'Status' => $status,
                'amount' => $amount,
                'request_id' => $request_id,
                'pay_date'=> $this->jdf->jdate('l, j F Y',time(),'','GMT')
            );

            $this->Model_Api->Insert("pay",$data);


			$this->Model_Api->update_state_request($people_id,'request_id',$request_id,'1','request');

			redirect('site/Request');


        }

    }

}
