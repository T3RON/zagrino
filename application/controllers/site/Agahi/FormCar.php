<?php
include_once(APPPATH.'core/CI_Panel.php');
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class FormCar extends CI_Panel {
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
        $output['car_cate'] = $this->MY_Model->select('car_cate');
        $output['car_state'] = $this->MY_Model->select('car_state');
        $output['car_sokht'] = $this->MY_Model->select('car_sokht');
        $output['car_type'] = $this->MY_Model->select('car_type');
        $output['car_body'] = $this->MY_Model->select('car_body');
        $output['ostan'] = $this->MY_Model->select('ostan');
        $output['agahi_state_kala'] = $this->MY_Model->select('agahi_state_kala');
        $output['show_time'] = $this->MY_Model->select('show_time');
        $output['car_state'] = $this->MY_Model->select('car_state');

        $output['vip'] = true;
       


        $this->load->vars(array(
            'home_page' => TRUE
        ));
        $output['title'] = "كاربران";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('site/Car', $output);
    }

    function free()
    {
        $output['menu_top'] = $this->MY_Model->select('menu');
        $output['menu_middel'] = $this->MY_Model->select('secend_menu');
        $output['footer_menu'] = $this->MY_Model->select('footer_menu');
        $output['slider'] = $this->MY_Model->select('slider');
        $output['text'] = $this->MY_Model->select('text');
        $output['site'] = $this->MY_Model->select_single('site','1');
        $output['car_cate'] = $this->MY_Model->select('car_cate');
        $output['car_state'] = $this->MY_Model->select('car_state');
        $output['car_sokht'] = $this->MY_Model->select('car_sokht');
        $output['car_type'] = $this->MY_Model->select('car_type');
        $output['car_body'] = $this->MY_Model->select('car_body');
        $output['ostan'] = $this->MY_Model->select('ostan');
        $output['agahi_state_kala'] = $this->MY_Model->select('agahi_state_kala');
        $output['show_time'] = $this->MY_Model->select('show_time');
        $output['car_state'] = $this->MY_Model->select('car_state');
        $output['vip'] = false;
     


        $this->load->vars(array(
            'home_page' => TRUE
        ));
        $output['title'] = "كاربران";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('site/Car', $output);
    }


    function vip_register() {



        $data = array(
            
            'accounts_id' =>$this->session->userdata('accounts_id'),
            'ostan_id' =>$this->input->post('ostan_id'),
            'city_id' =>$this->input->post('city_id'),
            'agahi_car_title' =>$this->input->post('agahi_car_title'),
            'car_cate_id' =>$this->input->post('car_cate_id'),
            'car_sub_cate_id' =>$this->input->post('car_sub_cate_id'),
            'car_tag_id' =>$this->input->post('car_tag_id'),
            'car_cond_tag_id' =>$this->input->post('car_cond_tag_id'),
            'agahi_car_price' =>$this->input->post('agahi_car_price'),
            'agahi_car_full_des' =>$this->input->post('agahi_car_full_des'),
            'agahi_car_tell' =>$this->input->post('agahi_car_tell'),
            'agahi_car_mobile' =>$this->input->post('agahi_car_mobile'),
            'agahi_car_address' =>$this->input->post('agahi_car_address'),
            'agahi_car_year' =>$this->input->post('agahi_car_year'),
            'car_type_id' =>$this->input->post('car_type_id'),
            'car_body_id' =>$this->input->post('car_body_id'),
            'agahi_car_karked' =>$this->input->post('agahi_car_karked'),
            'car_state_id' =>$this->input->post('car_state_id'),
            'car_sokht_id' =>$this->input->post('car_sokht_id'),
            'agahi_car_pelak' =>$this->input->post('agahi_car_pelak'),
            'agahi_car_color' =>$this->input->post('agahi_car_color'),
            'agahi_car_body_des' =>$this->input->post('agahi_car_body_des'),
            'agahi_car_motor_des' =>$this->input->post('agahi_car_motor_des'), 
            'map_latitude' =>$this->input->post('map_latitude'), 
            'map_longitude' =>$this->input->post('map_longitude'), 
            'img1' =>$this->MY_Model->upload('img1','jpg|png',5024),
            'img2' =>$this->MY_Model->upload('img2','jpg|png',5024),
            'img3' =>$this->MY_Model->upload('img3','jpg|png',5024),
            'img4' =>$this->MY_Model->upload('img4','jpg|png',5024),
            'img5' =>$this->MY_Model->upload('img5','jpg|png',5024),
            'img6' =>$this->MY_Model->upload('img6','jpg|png',5024),
            'register_date' =>$this->jdf->jdate('l, j F Y',time(),'','GMT'),
            'update_date' =>0,
            'state_id' => 12,
            'days' =>$this->input->post('days'),
            'expire' =>$this->calculate($this->input->post('days'))
        );


        $this->form_validation->set_rules('car_cate_id','دسته بندي','required');
        $this->form_validation->set_rules('car_sub_cate_id','زير دسته بندي','required');
        $this->form_validation->set_rules('ostan_id','استان','required');
        $this->form_validation->set_rules('city_id','شهرستان','required');
        $this->form_validation->set_rules('agahi_car_mobile','موبایل','required');
        $this->form_validation->set_rules('map_latitude','موقعيت','required',array('required' => '%s خود را روي نقشه مشخص كنيد'));
       
       
        if($this->form_validation->run() == FALSE){
            $array_msg = array('title'=>'خطا','text'=>'مشكلي در ارسال شغل بوجود آمده','type'=>'error');
            $this->session->set_flashdata('msg',$array_msg);
            $this->vip();
           

        }
        else{
            $jobs = $this->MY_Model->insert('agahi_car',$data);
            
            if($jobs) {
                $array_msg = array('title'=>'تبريك','text'=>'وسیله شما با موفقيت درج گرديد','type'=>'success');
                $this->session->set_flashdata('msg',$array_msg);
                redirect('site/Agahi/Car_Payment/car/'.$this->db->insert_id());
            }else {
                $array_msg = array('title'=>'خطا','text'=>'مشكلي در ارسال شغل بوجود آمده','type'=>'error');
                $this->session->set_flashdata('msg',$array_msg);
                redirect('site/Agahi/FormCar/vip');

            }
          
        }


    

    }
    
    function free_register() {




        $data = array(
            
            'accounts_id' =>$this->session->userdata('accounts_id'),
            'ostan_id' =>$this->input->post('ostan_id'),
            'city_id' =>$this->input->post('city_id'),
            'agahi_car_title' =>$this->input->post('agahi_car_title'),
            'car_cate_id' =>$this->input->post('car_cate_id'),
            'car_sub_cate_id' =>$this->input->post('car_sub_cate_id'),
            'car_tag_id' =>$this->input->post('car_tag_id'),
            'car_cond_tag_id' =>$this->input->post('car_cond_tag_id'),
            'agahi_car_price' =>$this->input->post('agahi_car_price'),
            'agahi_car_full_des' =>$this->input->post('agahi_car_full_des'),
            'agahi_car_tell' =>$this->input->post('agahi_car_tell'),
            'agahi_car_mobile' =>$this->input->post('agahi_car_mobile'),
            'agahi_car_address' =>$this->input->post('agahi_car_address'),
            'agahi_car_year' =>$this->input->post('agahi_car_year'),
            'car_type_id' =>$this->input->post('car_type_id'),
            'car_body_id' =>$this->input->post('car_body_id'),
            'agahi_car_karked' =>$this->input->post('agahi_car_karked'),
            'car_state_id' =>$this->input->post('car_state_id'),
            'car_sokht_id' =>$this->input->post('car_sokht_id'),
            'agahi_car_pelak' =>$this->input->post('agahi_car_pelak'),
            'agahi_car_color' =>$this->input->post('agahi_car_color'),
            'agahi_car_body_des' =>$this->input->post('agahi_car_body_des'),
            'agahi_car_motor_des' =>$this->input->post('agahi_car_motor_des'), 
            'map_latitude' =>$this->input->post('car_latitude'), 
            'map_longitude' =>$this->input->post('car_longitude'), 
            'img1' =>$this->MY_Model->upload('img1','jpg|png',5024),
            'img2' =>$this->MY_Model->upload('img2','jpg|png',5024),
            'img3' =>$this->MY_Model->upload('img3','jpg|png',5024),
            'register_date' =>$this->jdf->jdate('l, j F Y',time(),'','GMT'),
            'update_date' =>0,
            'state_id' => 12,
            'days' =>$this->input->post('days'),
            'expire' =>$this->calculate($this->input->post('days'))
        );



        $this->form_validation->set_rules('car_cate_id','دسته بندي','required');
        $this->form_validation->set_rules('car_sub_cate_id','زير دسته بندي','required');
        $this->form_validation->set_rules('ostan_id','استان','required');
        $this->form_validation->set_rules('city_id','شهرستان','required');
        $this->form_validation->set_rules('map_latitude','موقعيت','required',array('required' => '%s خود را روي نقشه مشخص كنيد'));
       
       
        if($this->form_validation->run() == FALSE){
            $array_msg = array('title'=>'خطا','text'=>'مشكلي در ارسال شغل بوجود آمده','type'=>'error');
            $this->session->set_flashdata('msg',$array_msg);
            $this->free(); 
           

        }
        else{
            $jobs = $this->MY_Model->insert('agahi_car',$data);
            
            if($jobs) {
                $array_msg = array('title'=>'تبريك','text'=>'وسیله شما با موفقيت درج گرديد','type'=>'success');
                $this->session->set_flashdata('msg',$array_msg);
                redirect('site/panel/Acar');
            }else {
                $array_msg = array('title'=>'خطا','text'=>'مشكلي در ارسال شغل بوجود آمده','type'=>'error');
                $this->session->set_flashdata('msg',$array_msg);
                redirect('site/Agahi/FormCar/vip');

            }
          
        }


    

    }


    function calculate($days) {
        $day =  time() + ($days * 86400);
        return $day;
    }  

    function get_sub_cate() {
        $car_cate_id = $this->input->post('id',TRUE);
        $data = $this->MY_Model->select_single_where('car_sub_cate','car_cate',$car_cate_id);
        echo json_encode($data);
    }

    function get_city() {
        $ostan_id = $this->input->post('id',TRUE);
        $data = $this->MY_Model->select_single_where('city','ostan',$ostan_id);
        echo json_encode($data);
    }


}
