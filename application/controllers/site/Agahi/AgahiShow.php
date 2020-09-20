<?php
include_once(APPPATH.'core/CI_Panel.php');
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class AgahiShow extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->library('ion_auth');
        $this->load->library('Jdf');
        $this->load->library('user_agent');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('Menu_Model');
        $this->load->model('MY_Model');
    }

    function index()
    {

        $id = $this->uri->segment('5');

        $output['agahi'] = $this->MY_Model->show_join_seven('agahi','agahi_cate','agahi_sub_cate','accounts','ostan','city','state','agahi_cond_tag','agahi',$id);
        $output['bank_mashaghel_service'] = $this->MY_Model->show_join_two('rel_jobs_service','jobs_service','jobs','rel_jobs_service','jobs',$id);

        $output['menu_top'] = $this->Menu_Model->select('menu');
        $output['menu_middel'] = $this->Menu_Model->select('secend_menu');
        $output['footer_menu'] = $this->Menu_Model->select('footer_menu');
        $output['slider'] = $this->Menu_Model->select('slider');
        $output['text'] = $this->Menu_Model->select('text');
        $output['site'] = $this->MY_Model->select_single('site','1');
        $output['agahi_cate'] = $this->MY_Model->select_limit('agahi_cate','5');

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
            'message_email' => $this->input->post('email'),
            'message_mobile' => $this->input->post('mobile'),
            'message_text' => $this->input->post('text')
        );
    
    

        if($re_rand_code == $rand_code) {
            $this->MY_Model->insert('agahi_message', $data);
            redirect('site/Agahi/AgahiShow/index/'.$this->input->post('agahi_id').'');
        }
    }


}
