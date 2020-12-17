<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Tour_Payment extends CI_Controller {

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

    public function eghamatgah() {

		$accounts_id = $this->session->userdata('accounts_id');
		$eghamatgah_id = $this->uri->segment(5);
		$agahi_tarefe =$this->session->userdata('agahi_tarefe');


        $desc = "پرداخت هزینه آگهی ویژه زاگرینو";
        $mobile = $this->db->select('account_mobile')
			->get_where('zgr_accounts', array('accounts_id' => $accounts_id))
			->row()
			->account_mobile;
        $call_back = base_url('')."site/Gardeshgari/Tour_Payment/callback_tour?amount=$agahi_tarefe&mobile=$mobile&accounts_id=$accounts_id&tour_id=$tour_id";


        $this->zarinpal->sandbox();

        if ($this->zarinpal->request($agahi_tarefe, $desc, $call_back)) {

            $authority = $this->zarinpal->get_authority();
            $this->zarinpal->redirect();

        } else {
            // Unable to connect to gateway
            echo $this->zarinpal->get_error();
        }

    }

    public function callback_tour() {
        $amount = $this->input->get('amount', TRUE);;
        $status = $this->input->get('Status', TRUE);
        $authority = $this->input->get('Authority', TRUE);
        $mobile = $this->input->get('mobile', TRUE);
        $accounts_id = $this->input->get('accounts_id', TRUE);
		$tour_id = $this->input->get('tour_id', TRUE);

        if ($status !== 'OK' OR $authority === NULL)
        {
            $array_msg = array('title'=>'متاسفانه','text'=>'پرداختی صورت نگرفت','type'=>'error');
            $this->session->set_flashdata('msg',$array_msg);
            redirect('site/Gardeshgari/Tour/vip');
        }else {
            //$ref_id = $this->zarinpal->get_ref_id();
            // payment succeeded, do database stuff

            $data = array(
                'accounts_id' => $accounts_id,
                'authority' => $authority,
                'mobile' => $mobile,
                'Status' => $status,
                'amount' => $amount,
                'tour_id' => $tour_id,
                'pay_date'=> $this->jdf->jdate('l, j F Y',time(),'','GMT')
            );

            $this->Model_Api->Insert("tour_pay",$data);



			redirect('site/panel/Gardeshgary');


        }

    }




	}