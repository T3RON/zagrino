<?php
include_once(APPPATH.'core/CI_Panel.php');
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class TourShow extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->library('ion_auth');
        $this->load->library('Jdf');
        $this->load->library('user_agent');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('menu_model');
        $this->load->model('MY_Model');
    }

    function index()
    {

        $id = $this->uri->segment('5');
        $accounts_id = $this->uri->segment('6');

        $output['agahi'] = $this->MY_Model->show_join_eight('agahi','agahi_cate','agahi_sub_cate','accounts','ostan','agahi_state_kala','city','state','agahi_cond_tag','agahi',$id);
		$output['another_agahi'] = $this->MY_Model->select_single_where_limit('agahi','accounts',$accounts_id,4);

        $output['menu_top'] = $this->menu_model->select('menu');
        $output['menu_middel'] = $this->menu_model->select('secend_menu');
        $output['footer_menu'] = $this->menu_model->select('footer_menu');
        $output['slider'] = $this->menu_model->select('slider');
        $output['text'] = $this->menu_model->select('text');
        $output['site'] = $this->MY_Model->select_single('site','1');

        $output['rand_number'] = rand(1000,9999);

        
       
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('site/Agahi_show', $output);
    }

    function send_message() {

        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        
      
        $rand_code = $this->input->post('sec_code');
        $re_rand_code = $this->input->post('re_sec_code');

        $data = array(
            'agahi_id' => $this->input->post('agahi_id'),
            'accounts_id' => $this->input->post('accounts_id'),
            'message_email' => $this->input->post('email'),
            'message_mobile' => $this->input->post('mobile'),
            'message_text' => $this->input->post('text'),
            'state_id' => 10
        );


        if($re_rand_code == $rand_code) {
           
            $t = $this->MY_Model->insert('agahi_message', $data);
            
            echo json_encode(array(
				"statusCode"=>200
			));
        }
    }


}
