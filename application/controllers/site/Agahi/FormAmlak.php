<?php
include_once(APPPATH.'core/CI_Panel.php');
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class FormAmlak extends CI_Panel {
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
        $output['amlak_cate'] = $this->MY_Model->select('amlak_cate');
        $output['ostan'] = $this->MY_Model->select('ostan');
        $output['agahi_state_kala'] = $this->MY_Model->select('agahi_state_kala');
        $output['vip'] = true;
       


        $this->load->vars(array(
            'home_page' => TRUE
        ));
        $output['title'] = "كاربران";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('site/FormAmlak', $output);
    }

    function free()
    {
        $output['menu_top'] = $this->MY_Model->select('menu');
        $output['menu_middel'] = $this->MY_Model->select('secend_menu');
        $output['footer_menu'] = $this->MY_Model->select('footer_menu');
        $output['slider'] = $this->MY_Model->select('slider');
        $output['text'] = $this->MY_Model->select('text');
        $output['site'] = $this->MY_Model->select_single('site','1');
        $output['amlak_cate'] = $this->MY_Model->select('amlak_cate');
        $output['ostan'] = $this->MY_Model->select('ostan');
        $output['agahi_state_kala'] = $this->MY_Model->select('agahi_state_kala');
        $output['vip'] = false;
     


        $this->load->vars(array(
            'home_page' => TRUE
        ));
        $output['title'] = "كاربران";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('site/FormAmlak', $output);
    }

    function register() {

        


        $data = array(
            
            'accounts_id' =>$this->session->userdata('accounts_id'),
            'ostan_id' =>$this->input->post('ostan_id'),
            'city_id' =>$this->input->post('city_id'),
            'amlak_cate_id' =>$this->input->post('amlak_cate_id'),
            'amlak_tag_id' =>$this->input->post('amlak_tag_id'),
            'amlak_cond_tag_id' =>$this->input->post('amlak_cond_tag_id'),
            'aamlak_tell' =>$this->input->post('aamlak_tell'),
            'amlak_cate_id' =>$this->input->post('agahi_cate_id'),
            'amlak_price' =>$this->input->post('amlak_price'),
            'amlak_des' =>$this->input->post('amlak_des'),
            'amlak_bonga_title' =>$this->input->post('amlak_bonga_title'),
            'amlak_agahi_dahande' =>$this->input->post('amlak_agahi_dahande'),
            'amlak_sanad_state' =>$this->input->post('amlak_sanad_state'),
            'amlak_mizan_malekiat' =>$this->input->post('amlak_mizan_malekiat'),
            'amlak_metraj' =>$this->input->post('amlak_metraj'),
            'amlak_sanad_type' =>$this->input->post('amlak_sanad_type'),
            'amlak_full_des' =>$this->input->post('amlak_full_des'),
            'amlak_ejare_price' =>$this->input->post('amlak_ejare_price'),
            'amlak_rahn_price' =>$this->input->post('amlak_rahn_price'),
            'amlak_count_room' =>$this->input->post('amlak_count_room'),
            'amlak_tabaghe' =>$this->input->post('amlak_tabaghe'),
            'amlak_parking' =>$this->input->post('amlak_parking'),
            'amlak_emtiaz' =>$this->input->post('amlak_emtiaz'),
            'amlak_anbari' =>$this->input->post('amlak_anbari'),
            'amlak_asansor' =>$this->input->post('amlak_asansor'),
            'amlak_address' =>$this->input->post('amlak_address'),
            'amlak_latitude' =>$this->input->post('amlak_latitude'),
            'amlak_longitude' =>$this->input->post('amlak_longitude'),
            'img1' =>$this->MY_Model->upload('img1','jpg|png',5024),
            'img2' =>$this->MY_Model->upload('img2','jpg|png',5024),
            'img3' =>$this->MY_Model->upload('img3','jpg|png',5024),
            'img4' =>$this->MY_Model->upload('img4','jpg|png',5024),
            'img5' =>$this->MY_Model->upload('img5','jpg|png',5024),
            'img6' =>$this->MY_Model->upload('img6','jpg|png',5024),
            'state_id' =>0,
            'price_id' =>0,
            'register_date' =>0,
            'update_date' =>0,
            'days' =>$this->input->post('days'),
            'expire' =>$this->calculate($this->input->post('days'))
            
        );

        $this->form_validation->set_rules('amlak_bonga_title','عنوان آگهی','required');
        $this->form_validation->set_rules('aamlak_tell','شماره تماس','required');
        $this->form_validation->set_rules('aamlak_cate_id',' دسته بندي','required');
        $this->form_validation->set_rules('ostan_id','استان','required');
        $this->form_validation->set_rules('city_id','شهرستان','required');
        $this->form_validation->set_rules('aamlak_latitude','موقعيت','required',array('required' => '%s خود را روي نقشه مشخص كنيد'));


        if($this->form_validation->run() == FALSE){
            $array_msg = array('title'=>'خطا','text'=>'تمام فیلد های مورد نیاز را تکمیل نمایید','type'=>'error');
            $this->session->set_flashdata('msg',$array_msg);
            $this->index();


        }
        else{
            $jobs = $this->MY_Model->insert('agahi_amlak',$data);
            
            if($jobs) {
                $array_msg = array('title'=>'تبريك','text'=>'آگهی شما با موفقيت درج گرديد','type'=>'success');
                $this->session->set_flashdata('msg',$array_msg);
                redirect('site/Agahi/FormAmlak/index');
            }else {
                $array_msg = array('title'=>'خطا','text'=>'مشكلي در ارسال آگهی بوجود آمده','type'=>'error');
                $this->session->set_flashdata('msg',$array_msg);
                redirect('site/Agahi/FormAmlak/index');

            }
          
        }


    

    }


    function calculate($days) {
        $day =  time() + ($days * 86400);
        return $day;
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
