<?php
include_once(APPPATH.'core/CI_Panel.php');
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Roydad extends CI_Panel {
    function __construct()
    {
        parent::__construct();
		$this->load->library('Jdf');
        $this->load->model('MY_Model');
        $this->load->helper('url'); 

	}

    function vip()
    {
        $output['menu_top'] = $this->MY_Model->select('menu');
        $output['menu_middel'] = $this->MY_Model->select('secend_menu');
        $output['footer_menu'] = $this->MY_Model->select('footer_menu');
        $output['slider'] = $this->MY_Model->select('slider');
        $output['text'] = $this->MY_Model->select('text');
        $output['site'] = $this->MY_Model->select_single('site','1');
        $output['ostan'] = $this->MY_Model->select('ostan');
        $output['show_time'] = $this->MY_Model->select('show_time');
        $output['events_cate'] = $this->MY_Model->select('events_cate');
        $output['vip'] = true;
     


        $this->load->vars(array(
            'home_page' => TRUE
        ));
        $output['title'] = "كاربران";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('site/Roidad_Form', $output);
    }

    function free()
    {
        $output['menu_top'] = $this->MY_Model->select('menu');
        $output['menu_middel'] = $this->MY_Model->select('secend_menu');
        $output['footer_menu'] = $this->MY_Model->select('footer_menu');
        $output['slider'] = $this->MY_Model->select('slider');
        $output['text'] = $this->MY_Model->select('text');
        $output['site'] = $this->MY_Model->select_single('site','1');
        $output['ostan'] = $this->MY_Model->select('ostan');
        $output['show_time'] = $this->MY_Model->select('show_time');
        $output['events_cate'] = $this->MY_Model->select('events_cate');
        $output['vip'] = false;
     


        $this->load->vars(array(
            'home_page' => TRUE
        ));
        $output['title'] = "كاربران";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('site/Roidad_Form', $output);
    }


    function vip_register() {



        $data = array(
            
            'accounts_id' =>$this->session->userdata('accounts_id'),
            'ostan_id' =>$this->input->post('ostan_id'),
            'city_id' =>$this->input->post('city_id'),
            'events_cate_id' =>$this->input->post('events_cate_id'),
            'events_title' =>$this->input->post('events_title'),
            'events_dec' =>$this->input->post('events_dec'),
            'events_start' =>$this->input->post('events_start'),
            'events_finish' =>$this->input->post('events_finish'),
            'events_type' =>$this->input->post('events_type'),
            'events_run' =>$this->input->post('events_run'),
            'events_capacity' =>$this->input->post('events_capacity'),
            'events_level' =>$this->input->post('events_level'),
            'events_conditons' =>$this->input->post('events_conditons'),
            'events_link_site' =>$this->input->post('events_link_site'),
            'events_phone' =>$this->input->post('events_phone'),
            'events_instagram' =>$this->input->post('events_instagram'),
            'events_telegram' =>$this->input->post('events_telegram'),
            'events_address	' =>$this->input->post('events_address'),
            'map_latitude' =>$this->input->post('map_latitude'),
            'map_longitude' =>$this->input->post('map_longitude'),
            'events_email' =>$this->input->post('events_email'),
            'img1' =>$this->MY_Model->upload('img1','jpg|png',5024),
            'img2' =>$this->MY_Model->upload('img2','jpg|png',5024),
            'img3' =>$this->MY_Model->upload('img3','jpg|png',5024),
            'img4' =>$this->MY_Model->upload('img4','jpg|png',5024),
            'img5' =>$this->MY_Model->upload('img4','jpg|png',5024),
            'img6' =>$this->MY_Model->upload('img4','jpg|png',5024),
            'register_date' =>$this->jdf->jdate('l, j F Y',time(),'','GMT'),
            'update_date' =>0,
            'state_id' => 12,
            'days' =>$this->input->post('days'),
            'expire' =>$this->calculate($this->input->post('days'))
        );


        $this->form_validation->set_rules('events_title','عنوان ','required');
        $this->form_validation->set_rules('ostan_id','استان','required');
        $this->form_validation->set_rules('city_id','شهرستان','required');
        $this->form_validation->set_rules('events_phone','تماس','required');
        $this->form_validation->set_rules('map_latitude','موقعيت','required',array('required' => '%s خود را روي نقشه مشخص كنيد'));
       
       
        if($this->form_validation->run() == FALSE){
            $array_msg = array('title'=>'خطا','text'=>'مشكلي در ارسال رویداد بوجود آمده','type'=>'error');
            $this->session->set_flashdata('msg',$array_msg);
            $this->vip();
           

        }
        else{
            $jobs = $this->MY_Model->insert('events',$data);
            
            if($jobs) {
                $array_msg = array('title'=>'تبريك','text'=>'رویداد شما با موفقيت درج گرديد','type'=>'success');
                $this->session->set_flashdata('msg',$array_msg);
                redirect('site/Roidad/Roidad_Payment/roidad/'.$this->db->insert_id());
            }else {
                $array_msg = array('title'=>'خطا','text'=>'مشكلي در ارسال رویداد بوجود آمده','type'=>'error');
                $this->session->set_flashdata('msg',$array_msg);
                redirect('site/Roidad/Roydad/vip');

            }
          
        }


    

    }
    
    function free_register() {





        $data = array(
            
            'accounts_id' =>$this->session->userdata('accounts_id'),
            'ostan_id' =>$this->input->post('ostan_id'),
            'city_id' =>$this->input->post('city_id'),
            'events_cate_id' =>$this->input->post('events_cate_id'),
            'events_title' =>$this->input->post('events_title'),
            'events_dec' =>$this->input->post('events_dec'),
            'events_start' =>$this->input->post('events_start'),
            'events_finish' =>$this->input->post('events_finish'),
            'events_type' =>$this->input->post('events_type'),
            'events_run' =>$this->input->post('events_run'),
            'events_capacity' =>$this->input->post('events_capacity'),
            'events_level' =>$this->input->post('events_level'),
            'events_conditons' =>$this->input->post('events_conditons'),
            'events_link_site' =>$this->input->post('events_link_site'),
            'events_phone' =>$this->input->post('events_phone'),
            'events_instagram' =>$this->input->post('events_instagram'),
            'events_telegram' =>$this->input->post('events_telegram'),
            'events_address	' =>$this->input->post('events_address'),
            'map_latitude' =>$this->input->post('map_latitude'),
            'map_longitude' =>$this->input->post('map_longitude'),
            'events_email' =>$this->input->post('events_email'),
            'img1' =>$this->MY_Model->upload('img1','jpg|png',5024),
            'img2' =>$this->MY_Model->upload('img2','jpg|png',5024),
            'img3' =>$this->MY_Model->upload('img3','jpg|png',5024),
            'img4' =>$this->MY_Model->upload('img4','jpg|png',5024),
            'img5' =>$this->MY_Model->upload('img4','jpg|png',5024),
            'img6' =>$this->MY_Model->upload('img4','jpg|png',5024),
            'register_date' =>$this->jdf->jdate('l, j F Y',time(),'','GMT'),
            'update_date' =>0,
            'state_id' => 12,
            'days' =>$this->input->post('days'),
            'expire' =>$this->calculate($this->input->post('days'))
        );



      
        $this->form_validation->set_rules('events_title','عنوان ','required');
        $this->form_validation->set_rules('ostan_id','استان','required');
        $this->form_validation->set_rules('city_id','شهرستان','required');
        $this->form_validation->set_rules('events_phone','تماس','required');
        $this->form_validation->set_rules('map_latitude','موقعيت','required',array('required' => '%s خود را روي نقشه مشخص كنيد'));
       
       
        if($this->form_validation->run() == FALSE){
            $array_msg = array('title'=>'خطا','text'=>'مشكلي در ارسال رویداد بوجود آمده','type'=>'error');
            $this->session->set_flashdata('msg',$array_msg);
            $this->vip();
           

        }
        else{
            $jobs = $this->MY_Model->insert('events',$data);
            
            if($jobs) {
                $array_msg = array('title'=>'تبريك','text'=>'رویداد شما با موفقيت درج گرديد','type'=>'success');
                $this->session->set_flashdata('msg',$array_msg);
                redirect('site/panel/Gardeshgary');
            }else {
                $array_msg = array('title'=>'خطا','text'=>'مشكلي در ارسال رویداد بوجود آمده','type'=>'error');
                $this->session->set_flashdata('msg',$array_msg);
                redirect('site/Roidad/Roydad/free');

            }
          
        }


    

    }


    function calculate($days) {
        $day =  time() + ($days * 86400);
        return $day;
    }  


    function get_city() {
        $ostan_id = $this->input->post('id',TRUE);
        $data = $this->MY_Model->select_single_where('city','ostan',$ostan_id);
        echo json_encode($data);
    }


}
