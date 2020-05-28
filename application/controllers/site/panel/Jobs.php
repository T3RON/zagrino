<?php

include_once(APPPATH.'core/CI_Panel.php');
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Jobs extends CI_Panel {
    function __construct()
    {
        parent::__construct();
        $this->load->helper('Message');

    }

    function index()
    {
   
        $output['menu_top'] = $this->Menu_Model->select('menu');
        $output['menu_middel'] = $this->Menu_Model->select('secend_menu');
        $output['footer_menu'] = $this->Menu_Model->select('footer_menu');
        $output['slider'] = $this->Menu_Model->select('slider');
        $output['text'] = $this->Menu_Model->select('text');
        $output['site'] = $this->MY_Model->select_single('site','1');
        $output['jobs'] = $this->MY_Model->show_join_six('jobs','jobs_cate','jobs_sub_cate','accounts','ostan','city','state','zgr_jobs.accounts',$this->session->userdata('accounts_id'));




      
        $output['title'] = "پنل كاربري";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('site/Pjobs',$output);
    }

    function insert() {



        $data = array(
            
            'jobs_cate_id' =>$this->input->post('jobs_cate_id'),
            'jobs_sub_cate_id' =>$this->input->post('jobs_sub_cate_id'),
            'accounts_id' =>$this->input->post('accounts_id'),
            'ostan_id' =>$this->input->post('ostan_id'),
            'city_id' =>$this->input->post('city_id'),
            'jobs_title' =>$this->input->post('jobs_title'),
            'jobs_shobe' =>$this->input->post('jobs_shobe'),
            'jobs_content' =>$this->input->post('jobs_content'),
            'jobs_feature' =>$this->input->post('jobs_feature'),
            'jobs_work_titme' =>$this->input->post('jobs_work_titme'),
            'jobs_mobile' =>$this->input->post('jobs_mobile'),
            'jobs_tell' =>$this->input->post('jobs_tell'),
            'jobs_fax' =>$this->input->post('jobs_fax'),
            'jobs_email' =>$this->input->post('jobs_email'),
            'jobs_code_posti' =>$this->input->post('jobs_code_posti'),
            'jobs_website' =>$this->input->post('jobs_website'),
            'jobs_instagram' =>$this->input->post('jobs_instagram'),
            'jobs_telegram' =>$this->input->post('jobs_telegram'),
            'jobs_whatsapp' =>$this->input->post('jobs_whatsapp'),
            'jobs_facebook' =>$this->input->post('jobs_facebook'),
            'jobs_tw' =>$this->input->post('jobs_tw'),
            'jobs_pinterest' =>$this->input->post('jobs_pinterest'),
            'jobs_youtube' =>$this->input->post('jobs_youtube'),
            'jobs_address' =>$this->input->post('jobs_address'),
            'map_latitude' =>$this->input->post('map_latitude'),
            'map_longitude' =>$this->input->post('map_longitude'),
            'jobs_count_namayandegi' =>$this->input->post('jobs_count_namayandegi'),
            'jobs_count_namayandegi_in_city' =>$this->input->post('jobs_count_namayandegi_in_city'),
            'jobs_sharayet' =>$this->input->post('jobs_sharayet'),
            'jobs_list_service' =>$this->input->post('jobs_list_service'),
            'jobs_service_id' =>$this->input->post('jobs_service_id'),
            'jobs_mojavez' =>$this->input->post('jobs_mojavez'),
            'jobs_video' =>$this->Menu_Model->upload('jobs_video','jpg|png|mp4',51024),
            'register_date' =>$this->jdf->jdate('l, j F Y',time(),'','GMT'),
            'update_date' =>'',
            'state_id' =>1,
            'jobs_logo' =>$this->Menu_Model->upload('jobs_logo','jpg|png',5024),
            'img1' =>$this->Menu_Model->upload('img1','jpg|png',5024),
            'img2' =>$this->Menu_Model->upload('img2','jpg|png',5024),
            'img3' =>$this->Menu_Model->upload('img3','jpg|png',5024),
            'img4' =>$this->Menu_Model->upload('img4','jpg|png',5024),
            'jobs_shoar' =>$this->input->post('jobs_shoar'),
            'price_id' =>0,
            'expire' =>"1"
        );


        $this->form_validation->set_rules('jobs_cate_id','دسته بندي','required');
        $this->form_validation->set_rules('jobs_sub_cate_id','زير دسته بندي','required');
        $this->form_validation->set_rules('ostan_id','استان','required');
        $this->form_validation->set_rules('city_id','شهرستان','required');
        $this->form_validation->set_rules('jobs_map_latitude','موقعيت','required',array('required' => '%s خود را روي نقشه مشخص كنيد'));
       
       
        if($this->form_validation->run() == FALSE){
            $array_msg = array('title'=>'خطا','text'=>'مشكلي در ارسال شغل بوجود آمده','type'=>'error');
            $this->session->set_flashdata('msg',$array_msg);
            $this->index();  
           

        }
        else{
            $jobs = $this->Menu_Model->insert('jobs',$data);
            
            if($jobs) {
                $array_msg = array('title'=>'تبريك','text'=>'شغل شما با موفقيت درج گرديد','type'=>'success');
                $this->session->set_flashdata('msg',$array_msg);
                redirect('site/work/BankMashaghelRaiganForm/index');
            }else {
                $array_msg = array('title'=>'خطا','text'=>'مشكلي در ارسال شغل بوجود آمده','type'=>'error');
                $this->session->set_flashdata('msg',$array_msg);
                redirect('site/work/BankMashaghelRaiganForm/index');

            }
          
        }


    

    }

    function show() {
        $id = $this->uri->segment(5);
        $output['menu_top'] = $this->Menu_Model->select('menu');
        $output['menu_middel'] = $this->Menu_Model->select('secend_menu');
        $output['footer_menu'] = $this->Menu_Model->select('footer_menu');
        $output['slider'] = $this->Menu_Model->select('slider');
        $output['text'] = $this->Menu_Model->select('text');
        $output['site'] = $this->MY_Model->select_single('site','1');
        $output['ostan'] = $this->MY_Model->select('ostan');
        $output['cate'] = $this->MY_Model->select('jobs_cate');
        $output['jobs'] = $this->MY_Model->show_join_six('jobs','jobs_cate','jobs_sub_cate','accounts','ostan','city','state','zgr_jobs.jobs',$id);




      
        $output['title'] = "پنل كاربري";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('site/Psjobs',$output);
        
    }

    function edit() {
        $id = $this->uri->segment(5);
        $output['menu_top'] = $this->Menu_Model->select('menu');
        $output['menu_middel'] = $this->Menu_Model->select('secend_menu');
        $output['footer_menu'] = $this->Menu_Model->select('footer_menu');
        $output['slider'] = $this->Menu_Model->select('slider');
        $output['text'] = $this->Menu_Model->select('text');
        $output['site'] = $this->MY_Model->select_single('site','1');
        $output['ostan'] = $this->MY_Model->select('ostan');
        $output['cate'] = $this->MY_Model->select('jobs_cate');
        $output['jobs'] = $this->MY_Model->show_join_six('jobs','jobs_cate','jobs_sub_cate','accounts','ostan','city','state','zgr_jobs.jobs',$id);




      
        $output['title'] = "پنل كاربري";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('site/Pejobs',$output);
    }


    function delete() {
        $id = $this->uri->segment(5);
        $query = $this->MY_Model->delete('jobs',$id);
    
        if($query) {
            Message_helper::message('موفقيت','ركورد مورد نظر با موفقيت حذف شد','success','site/panel/Jobs');
        }else {
            Message_helper::message('خطا','مشكلي در حذف ركورد بوجود آمده ','error','site/panel/Jobs');
        }
    
        

    }

    function get_cities() {
        $ostan_id = $this->input->post('id',TRUE);
        $data = $this->MY_Model->select_single_where('city','ostan',$ostan_id);
        echo json_encode($data);
    }

    function get_cate() {
        $jobs_cate_id = $this->input->post('id',TRUE);
        $data = $this->MY_Model->select_single_where('jobs_sub_cate','jobs_cate',$jobs_cate_id);
        echo json_encode($data);
    }
 


}