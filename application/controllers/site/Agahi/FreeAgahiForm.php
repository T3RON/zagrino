<?php
include_once(APPPATH.'core/CI_Panel.php');
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class FreeAgahiForm extends CI_Panel {
    function __construct()
    {
        parent::__construct();
		$this->load->library('Jdf');
		$this->load->model('MY_Model');

	}

    function index()
    {
        $output['menu_top'] = $this->MY_Model->select('menu');
        $output['menu_middel'] = $this->MY_Model->select('secend_menu');
        $output['footer_menu'] = $this->MY_Model->select('footer_menu');
        $output['slider'] = $this->MY_Model->select('slider');
        $output['text'] = $this->MY_Model->select('text');
        $output['site'] = $this->MY_Model->select_single('site','1');
        $output['agahi_cate'] = $this->MY_Model->select('agahi_cate');
        $output['ostan'] = $this->MY_Model->select('ostan');
        $output['agahi_state_kala'] = $this->MY_Model->select('agahi_state_kala');


        $this->load->vars(array(
            'home_page' => TRUE
        ));
        $output['title'] = "كاربران";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('site/Niazmandi_Form_free', $output);
    }

    function register() {



        $data = array(
            
            'accounts_id' =>$this->input->post('jobs_cate_id'),
            'ostan_id' =>$this->input->post('ostan_id'),
            'city_id' =>$this->input->post('city_id'),
            'agahi_title' =>$this->input->post('agahi_title'),
            'agahi_cate_id' =>$this->input->post('agahi_cate_id'),
            'agahi_sub_cate_id' =>$this->input->post('agahi_sub_cate_id'),
            'agahi_des' =>$this->input->post('agahi_des'),
            'agahi_tell' =>$this->input->post('agahi_tell'),
            'agahi_latitude' =>$this->input->post('agahi_latitude'),
            'agahi_longitude' =>$this->input->post('agahi_longitude'),
            'agahi_cond_tag_id' =>$this->input->post('agahi_cond_tag_id'),
            'agahi_address' =>$this->input->post('agahi_address'),
            'agahi_email' =>$this->input->post('agahi_email'),

            'img1' =>$this->MY_Model->upload('img1','jpg|png',5024),
            'img2' =>$this->MY_Model->upload('img2','jpg|png',5024),
            'img3' =>$this->MY_Model->upload('img3','jpg|png',5024),

            'price_id' =>0,
            'expire' =>"1"
        );


        $this->form_validation->set_rules('agahi_cate_id','دسته بندي','required');
        $this->form_validation->set_rules('agahi_sub_cate_id','زير دسته بندي','required');
        $this->form_validation->set_rules('ostan_id','استان','required');
        $this->form_validation->set_rules('city_id','شهرستان','required');
        $this->form_validation->set_rules('agahi_latitude','موقعيت','required',array('required' => '%s خود را روي نقشه مشخص كنيد'));


        if($this->form_validation->run() == FALSE){
            $array_msg = array('title'=>'خطا','text'=>'مشكلي در ارسال آگهی بوجود آمده','type'=>'error');
            $this->session->set_flashdata('msg',$array_msg);
            $this->index();


        }
        else{
            $jobs = $this->MY_Model->insert('agahi',$data);
            
            if($jobs) {
                $array_msg = array('title'=>'تبريك','text'=>'آگهی شما با موفقيت درج گرديد','type'=>'success');
                $this->session->set_flashdata('msg',$array_msg);
                redirect('site/Agahi/FreeAgahiForm/index');
            }else {
                $array_msg = array('title'=>'خطا','text'=>'مشكلي در ارسال آگهی بوجود آمده','type'=>'error');
                $this->session->set_flashdata('msg',$array_msg);
                redirect('site/Agahi/FreeAgahiForm/index');

            }
          
        }


    

    }


    function get_sub_cate() {
        $agahi_cate_id = $this->input->post('id',TRUE);
        $data = $this->MY_Model->select_single_where('agahi_sub_cate','agahi_cate',$agahi_cate_id);
        echo json_encode($data);
    }

    function get_city() {
        $ostan_id = $this->input->post('id',TRUE);
        $data = $this->MY_Model->select_single_where('city','ostan',$ostan_id);
        echo json_encode($data);
    }
    


}
