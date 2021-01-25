<?php
include_once(APPPATH.'core/CI_Panel.php');

/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Alist extends CI_Controller {
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
        $output['agahi_cate'] =  $this->MY_Model->select('agahi_cate');


        
        $data = array();
        
        //total rows count
        $totalRec = count($this->MY_Model->agahi_getRows());
        
        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = base_url().'site/Agahi/Alist/agahi_list_ajax/';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $this->ajax_pagination->initialize($config);
        
        //get the posts data
        $output['agahi'] = $this->MY_Model->agahi_getRows(array('limit'=>$this->perPage));
        
        

        $this->load->vars(array(
            'home_page' => TRUE
        ));
        $output['title'] = "كاربران";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('site/Alist', $output);
    }





    function user_list()
    {
        $id = $this->uri->segment('5');
        $output['menu_top'] = $this->MY_Model->select('menu');
        $output['menu_middel'] = $this->MY_Model->select('secend_menu');
        $output['footer_menu'] = $this->MY_Model->select('footer_menu');
        $output['slider'] = $this->MY_Model->select('slider');
        $output['text'] = $this->MY_Model->select('text');
        $output['site'] = $this->MY_Model->select_single('site','1');
        $output['agahi_cate'] =  $this->MY_Model->select('agahi_cate');



        $data = array();
        
        //total rows count
        $totalRec = count($this->MY_Model->agahi_user_getRows($id));
        
        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = base_url().'site/Agahi/Alist/agahi_user_list_ajax/'.$id.'/';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $this->ajax_pagination->initialize($config);
        
        //get the posts data
        $output['agahi'] = $this->MY_Model->agahi_user_getRows($id,array('limit'=>$this->perPage));
        
        

        $this->load->vars(array(
            'home_page' => TRUE
        ));
        $output['title'] = "كاربران";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('site/agahi_user_list', $output);
    }

    function list()
    {
        $id = $this->uri->segment('5');
        $output['menu_top'] = $this->MY_Model->select('menu');
        $output['menu_middel'] = $this->MY_Model->select('secend_menu');
        $output['slider'] = $this->MY_Model->select('slider');
        $output['text'] = $this->MY_Model->select('text');
        $output['site'] = $this->MY_Model->select_single('site','1');
        $output['agahi_sub_cate'] = $this->MY_Model->select_single_where('agahi_sub_cate','agahi_cate',$id);
        $output['agahi'] = $this->MY_Model->join_six_withOrderBy_where('agahi','state','agahi_cate','city','ostan','agahi_cond_tag','agahi_state_kala','agahi.state_id','DESC','register_date','ASC','agahi.agahi_cate',$id);

        $this->load->vars(array(
            'home_page' => TRUE
        ));
        $output['title'] = "كاربران";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('site/Agahi_cate_list', $output);
    }

    function sub_list()
    {
        $id = $this->uri->segment('5');
        $output['menu_top'] = $this->MY_Model->select('menu');
        $output['menu_middel'] = $this->MY_Model->select('secend_menu');
        $output['slider'] = $this->MY_Model->select('slider');
        $output['text'] = $this->MY_Model->select('text');
        $output['site'] = $this->MY_Model->select_single('site','1');
        $output['agahi_sub_cate'] = $this->MY_Model->select_single_where('agahi_sub_cate','agahi_sub_cate',$id);
        $output['agahi'] = $this->MY_Model->join_six_withOrderBy_where('agahi','state','agahi_cate','city','ostan','agahi_cond_tag','agahi_state_kala','agahi.state_id','DESC','register_date','ASC','agahi.agahi_sub_cate',$id);

        $this->load->vars(array(
            'home_page' => TRUE
        ));
        $output['title'] = "كاربران";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('site/Agahi_cate_list', $output);
    }

    function agahi_check_record($cate_id) {
        $output['check_agahi'] = $this->MY_Model->g_count_where('agahi','zgr_agahi.agahi_cate_id',$cate_id);
        return $output['check_agahi'];

    }


    function agahi_user_list_ajax(){

        $id = $this->uri->segment('5');
    
        $output['menu_top'] = $this->MY_Model->select('menu');
        $output['menu_middel'] = $this->MY_Model->select('secend_menu');
        $output['footer_menu'] = $this->MY_Model->select('footer_menu');

        $output['slider'] = $this->MY_Model->select('slider');
        $output['text'] = $this->MY_Model->select('text');
        $output['site'] = $this->MY_Model->select_single('site','1');
        $output['car_cate'] =  $this->MY_Model->select_limit('car_cate','10'); 


        $page = $this->input->post('page');
       
        if(!$page){
            $offset = 0;
        }else{
            $offset = $page;
        }
        
        //total rows count
        $totalRec = count($this->MY_Model->agahi_user_getRows($id));
        
        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = base_url().'site/Agahi/Alist/agahi_user_list_ajax/'. $id .'/';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $this->ajax_pagination->initialize($config);
        
        //get the posts data
        $output['agahi_car'] = $this->MY_Model->agahi_user_getRows($id,array('start'=>$offset,'limit'=>$this->perPage));
        
        $this->load->vars(array(
            'home_page' => TRUE
        ));
        $output['title'] = "كاربران";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        //load the view
        $this->load->view('site/Ajax_agahi_load', $output, false);
    }

    function agahi_list_ajax(){

        $id = $this->uri->segment('5');
    
        $output['menu_top'] = $this->MY_Model->select('menu');
        $output['menu_middel'] = $this->MY_Model->select('secend_menu');
        $output['footer_menu'] = $this->MY_Model->select('footer_menu');

        $output['slider'] = $this->MY_Model->select('slider');
        $output['text'] = $this->MY_Model->select('text');
        $output['site'] = $this->MY_Model->select_single('site','1');
        $output['car_cate'] =  $this->MY_Model->select_limit('car_cate','10'); 


        $page = $this->input->post('page');
       
        if(!$page){
            $offset = 0;
        }else{
            $offset = $page;
        }
        
        //total rows count
        $totalRec = count($this->MY_Model->agahi_getRows());
        
        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = base_url().'site/Agahi/Alist/agahi_list_ajax/';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $this->ajax_pagination->initialize($config);
        
        //get the posts data
        $output['agahi_car'] = $this->MY_Model->agahi_getRows(array('start'=>$offset,'limit'=>$this->perPage));
        
        $this->load->vars(array(
            'home_page' => TRUE
        ));
        $output['title'] = "كاربران";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        //load the view
        $this->load->view('site/Ajax_agahi_load', $output, false);
    }


}