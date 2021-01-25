<?php
include_once(APPPATH.'core/CI_Panel.php');
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class FormAmlak extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('MY_Model');
        $this->load->library('ion_auth');
        $this->load->library('Jdf');
        $this->load->library('user_agent');
        $this->load->library('session');
        $this->load->library('pagination');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('Ajax_pagination');
        $this->perPage = 15;

    }
    

    function index()
    {
        $output['menu_top'] = $this->MY_Model->select('menu');
        $output['menu_middel'] = $this->MY_Model->select('secend_menu');
        $output['footer_menu'] = $this->MY_Model->select('footer_menu');

        $output['slider'] = $this->MY_Model->select('slider');
        $output['text'] = $this->MY_Model->select('text');
        $output['site'] = $this->MY_Model->select_single('site','1');
        $output['amlak_cate'] =  $this->MY_Model->select('amlak_cate');



        $data = array();
        
        //total rows count
        $totalRec = count($this->MY_Model->amlak_getRows());
        
        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = base_url().'site/Agahi/FormAmlak/amlak_list_ajax';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $this->ajax_pagination->initialize($config);
        
        //get the posts data
        $output['agahi_amlak'] = $this->MY_Model->amlak_getRows(array('limit'=>$this->perPage));
        
        

        $this->load->vars(array(
            'home_page' => TRUE
        ));
        $output['title'] = "كاربران";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('site/amlak_list', $output);
    }

    function Show() {
        $id = $this->uri->segment('5');
        $accounts_id = $this->uri->segment('6');

        $output['agahi_amlak'] = $this->MY_Model->show_join_five('agahi_amlak','amlak_cate','accounts','ostan','city','state','agahi_amlak',$id);
		$output['another_agahi'] = $this->MY_Model->select_single_where_limit('agahi_amlak','accounts',$accounts_id,4);

        $output['menu_top'] = $this->MY_Model->select('menu');
        $output['menu_middel'] = $this->MY_Model->select('secend_menu');
        $output['footer_menu'] = $this->MY_Model->select('footer_menu');
        $output['slider'] = $this->MY_Model->select('slider');
        $output['text'] = $this->MY_Model->select('text');
        $output['site'] = $this->MY_Model->select_single('site','1');

        $output['rand_number'] = rand(1000,9999);

        
       
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('site/Amlak_show', $output);
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
        $output['show_time'] = $this->MY_Model->select('show_time');

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

    function free_register() {

        


        $data = array(
            
            'accounts_id' =>$this->session->userdata('accounts_id'),
            'ostan_id' =>$this->input->post('ostan_id'),
            'city_id' =>$this->input->post('city_id'),
            'amlak_cate_id' =>$this->input->post('amlak_cate_id'),
            'amlak_tag_id' =>$this->input->post('amlak_tag_id'),
            'amlak_cond_tag_id' =>$this->input->post('amlak_cond_tag_id'),
            'amlak_tell' =>$this->input->post('amlak_tell'),
            'amlak_cate_id' =>$this->input->post('amlak_cate_id'),
            'amlak_price' =>$this->input->post('amlak_price'),
            'amlak_des' =>$this->input->post('amlak_des'),
            'amlak_bonga_title' =>$this->input->post('amlak_bonga_title'),
            'amlak_sanad_state' =>$this->input->post('amlak_sanad_state'),
            'amlak_mizan_malekiat' =>$this->input->post('amlak_mizan_malekiat'),
            'amlak_metraj' =>$this->input->post('amlak_metraj'),
            'amlak_sanad_type' =>$this->input->post('amlak_sanad_type'),
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
            'register_date' =>$this->jdf->jdate('l, j F Y',time(),'','GMT'),
            'update_date' =>0,
            'state_id' => 12,
            'days' =>$this->input->post('days'),
            'expire' =>$this->calculate($this->input->post('days'))
            
        );

        $this->form_validation->set_rules('amlak_bonga_title','عنوان آگهی','required');
        $this->form_validation->set_rules('amlak_tell','شماره تماس','required');
        $this->form_validation->set_rules('amlak_cate_id',' دسته بندي','required');
        $this->form_validation->set_rules('ostan_id','استان','required');
        $this->form_validation->set_rules('city_id','شهرستان','required');
        $this->form_validation->set_rules('amlak_latitude','موقعيت','required',array('required' => '%s خود را روي نقشه مشخص كنيد'));


        if($this->form_validation->run() == FALSE){
            $array_msg = array('title'=>'خطا','text'=>'تمام فیلد های مورد نیاز را تکمیل نمایید','type'=>'error');
            $this->session->set_flashdata('msg',$array_msg);
            $this->free();


        }
        else{
            $jobs = $this->MY_Model->insert('agahi_amlak',$data);
            
            if($jobs) {
                $array_msg = array('title'=>'تبريك','text'=>'آگهی شما با موفقيت درج گرديد','type'=>'success');
                $this->session->set_flashdata('msg',$array_msg);
                redirect('site/panel/Amlak');
            }else {
                $array_msg = array('title'=>'خطا','text'=>'مشكلي در ارسال آگهی بوجود آمده','type'=>'error');
                $this->session->set_flashdata('msg',$array_msg);
                redirect('site/Agahi/FormAmlak/free');

            }
          
        }


    

    }


    function vip_register() {

        


        $data = array(
            
            'accounts_id' =>$this->session->userdata('accounts_id'),
            'ostan_id' =>$this->input->post('ostan_id'),
            'city_id' =>$this->input->post('city_id'),
            'amlak_cate_id' =>$this->input->post('amlak_cate_id'),
            'amlak_tag_id' =>$this->input->post('amlak_tag_id'),
            'amlak_cond_tag_id' =>$this->input->post('amlak_cond_tag_id'),
            'amlak_tell' =>$this->input->post('amlak_tell'),
            'amlak_cate_id' =>$this->input->post('amlak_cate_id'),
            'amlak_price' =>$this->input->post('amlak_price'),
            'amlak_des' =>$this->input->post('amlak_des'),
            'amlak_bonga_title' =>$this->input->post('amlak_bonga_title'),
            'amlak_sanad_state' =>$this->input->post('amlak_sanad_state'),
            'amlak_mizan_malekiat' =>$this->input->post('amlak_mizan_malekiat'),
            'amlak_metraj' =>$this->input->post('amlak_metraj'),
            'amlak_sanad_type' =>$this->input->post('amlak_sanad_type'),
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
            'register_date' =>$this->jdf->jdate('l, j F Y',time(),'','GMT'),
            'update_date' =>0,
            'state_id' => 12,
            'days' =>$this->input->post('days'),
            'expire' =>$this->calculate($this->input->post('days'))
            
        );

        $this->form_validation->set_rules('amlak_bonga_title','عنوان آگهی','required');
        $this->form_validation->set_rules('amlak_tell','شماره تماس','required');
        $this->form_validation->set_rules('amlak_cate_id',' دسته بندي','required');
        $this->form_validation->set_rules('ostan_id','استان','required');
        $this->form_validation->set_rules('city_id','شهرستان','required');
        $this->form_validation->set_rules('amlak_latitude','موقعيت','required',array('required' => '%s خود را روي نقشه مشخص كنيد'));


        if($this->form_validation->run() == FALSE){
            $array_msg = array('title'=>'خطا','text'=>'تمام فیلد های مورد نیاز را تکمیل نمایید','type'=>'error');
            $this->session->set_flashdata('msg',$array_msg);
            $this->vip();


        }
        else{
            $jobs = $this->MY_Model->insert('agahi_amlak',$data);
            
            if($jobs) {
                $array_msg = array('title'=>'تبريك','text'=>'آگهی شما با موفقيت درج گرديد','type'=>'success');
                $this->session->set_flashdata('msg',$array_msg);
                redirect('site/Agahi/Amlak_Payment/amlak/'.$this->db->insert_id());
            }else {
                $array_msg = array('title'=>'خطا','text'=>'مشكلي در ارسال آگهی بوجود آمده','type'=>'error');
                $this->session->set_flashdata('msg',$array_msg);
                redirect('site/Agahi/FormAmlak/vip');

            }
          
        }


    

    }


    function list()
    {
        $id = $this->uri->segment('5');
        $output['menu_top'] = $this->MY_Model->select('menu');
        $output['menu_middel'] = $this->MY_Model->select('secend_menu');
        $output['footer_menu'] = $this->MY_Model->select('footer_menu');

        $output['slider'] = $this->MY_Model->select('slider');
        $output['text'] = $this->MY_Model->select('text');
        $output['site'] = $this->MY_Model->select_single('site','1');
        $output['amlak_cate'] =  $this->MY_Model->select('amlak_cate');



        $data = array();
        
        //total rows count
        $totalRec = count($this->MY_Model->amlak_cate_getRows($id));
        
        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = base_url().'site/Agahi/FormAmlak/amlak_list_ajax/'.$id.'/';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $this->ajax_pagination->initialize($config);
        
        //get the posts data
        $output['agahi_amlak'] = $this->MY_Model->amlak_cate_getRows($id,array('limit'=>$this->perPage));
        
        

        $this->load->vars(array(
            'home_page' => TRUE
        ));
        $output['title'] = "كاربران";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('site/amlak_list', $output);
    }

    function amlak_check_record($cate_id) {
        $output['check_amlak'] = $this->MY_Model->g_count_where('agahi_amlak','zgr_agahi_amlak.amlak_cate_id',$cate_id);
        return $output['check_amlak'];

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
    

    function amlak_list_ajax(){

        $output['menu_top'] = $this->MY_Model->select('menu');
        $output['menu_middel'] = $this->MY_Model->select('secend_menu');
        $output['footer_menu'] = $this->MY_Model->select('footer_menu');

        $output['slider'] = $this->MY_Model->select('slider');
        $output['text'] = $this->MY_Model->select('text');
        $output['site'] = $this->MY_Model->select_single('site','1');
        $output['amlak_cate'] =  $this->MY_Model->select('amlak_cate'); 


        $page = $this->input->post('page');
       
        if(!$page){
            $offset = 0;
        }else{
            $offset = $page;
        }
        
        //total rows count
        $totalRec = count($this->MY_Model->amlak_getRows());
        
        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = base_url().'site/Agahi/FormAmlak/amlak_list_ajax/0/';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $this->ajax_pagination->initialize($config);
        
        //get the posts data
        $output['agahi_car'] = $this->MY_Model->amlak_getRows(array('start'=>$offset,'limit'=>$this->perPage));
        
        $this->load->vars(array(
            'home_page' => TRUE
        ));
        $output['title'] = "كاربران";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        //load the view
        $this->load->view('site/Ajax_amlak_load', $output, false);
    }

    function send_message() {

        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        
      
        $rand_code = $this->input->post('sec_code');
        $re_rand_code = $this->input->post('re_sec_code');

        $data = array(
            'id' => $this->input->post('id'),
            'message_tag' =>'Amlak',
            'accounts_id' => $this->input->post('accounts_id'),
            'message_email' => $this->input->post('email'),
            'message_mobile' => $this->input->post('mobile'),
            'message_text' => $this->input->post('text'),
            'state_id' => 10
        );


        if($re_rand_code == $rand_code) {
           
            $t = $this->MY_Model->insert('message', $data);
            
            echo json_encode(array(
				"statusCode"=>200
			));
        }
    }
}
