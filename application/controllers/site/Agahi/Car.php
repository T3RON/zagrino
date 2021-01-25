<?php
include_once(APPPATH.'core/CI_Panel.php');

/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Car extends CI_Controller {
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
        $output['car_cate'] =  $this->MY_Model->select_limit('car_cate','10');
        //$output['agahi_cars'] = $this->MY_Model->join_five_withOrderBy_limit('agahi_car','state','ostan','city','car_cate','car_sub_cate','agahi_car.state_id','2','register_date','ASC',6);



        $data = array();
        
        //total rows count
        $totalRec = count($this->MY_Model->car_getRows());
        
        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = base_url().'site/Agahi/Car/car_list_ajax';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $this->ajax_pagination->initialize($config);
        
        //get the posts data
        $output['agahi_car'] = $this->MY_Model->car_getRows(array('limit'=>$this->perPage));
        
        

        $this->load->vars(array(
            'home_page' => TRUE
        ));
        $output['title'] = "كاربران";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('site/car_list', $output);
    }


    
    function Show() {
        $id = $this->uri->segment('5');
        $accounts_id = $this->uri->segment('6');

        $output['car'] = $this->MY_Model->show_join_six('agahi_car','car_cate','car_sub_cate','accounts','ostan','city','state','agahi_car',$id);
		$output['another_car'] = $this->MY_Model->select_single_where_limit('agahi_car','accounts',$accounts_id,4);

        $output['menu_top'] = $this->MY_Model->select('menu');
        $output['menu_middel'] = $this->MY_Model->select('secend_menu');
        $output['footer_menu'] = $this->MY_Model->select('footer_menu');
        $output['slider'] = $this->MY_Model->select('slider');
        $output['text'] = $this->MY_Model->select('text');
        $output['site'] = $this->MY_Model->select_single('site','1');

        $output['rand_number'] = rand(1000,9999);

        
       
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('site/car_show', $output);
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
        $output['car_cate'] =  $this->MY_Model->select('car_cate');



        $data = array();
        
        //total rows count
        $totalRec = count($this->MY_Model->car_user_getRows($id));
        
        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = base_url().'site/Agahi/Car/car_user_list_ajax/'.$id.'/';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $this->ajax_pagination->initialize($config);
        
        //get the posts data
        $output['agahi_car'] = $this->MY_Model->car_user_getRows($id,array('limit'=>$this->perPage));
        
        

        $this->load->vars(array(
            'home_page' => TRUE
        ));
        $output['title'] = "كاربران";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('site/car_list_single', $output);
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
        $output['car_cate'] =  $this->MY_Model->select('car_cate');



        $data = array();
        
        //total rows count
        $totalRec = count($this->MY_Model->car_cate_getRows($id));
        
        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = base_url().'site/Agahi/Car/car_cate_ajax/'.$id.'/';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $this->ajax_pagination->initialize($config);
        
        //get the posts data
        $output['agahi_car'] = $this->MY_Model->car_cate_getRows($id,array('limit'=>$this->perPage));
        
        

        $this->load->vars(array(
            'home_page' => TRUE
        ));
        $output['title'] = "كاربران";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('site/car_list', $output);
    }

    function sub_list()
    {
        $id = $this->uri->segment('5');
        $output['menu_top'] = $this->MY_Model->select('menu');
        $output['menu_middel'] = $this->MY_Model->select('secend_menu');
        $output['footer_menu'] = $this->MY_Model->select('footer_menu');

        $output['slider'] = $this->MY_Model->select('slider');
        $output['text'] = $this->MY_Model->select('text');
        $output['site'] = $this->MY_Model->select_single('site','1');
        $output['car_cate'] =  $this->MY_Model->select_single_where('car_sub_cate','car_sub_cate',$id);



        $data = array();
        
        //total rows count
        $totalRec = count($this->MY_Model->car_subcate_getRows($id));
        
        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = base_url().'site/Agahi/Car/car_subcate_ajax/'.$id.'/';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $this->ajax_pagination->initialize($config);
        
        //get the posts data
        $output['agahi_car'] = $this->MY_Model->car_subcate_getRows($id,array('limit'=>$this->perPage));
        
        

        $this->load->vars(array(
            'home_page' => TRUE
        ));
        $output['title'] = "كاربران";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('site/car_sub_list', $output);
    }

    function car_check_record($cate_id) {
        $output['check_car'] = $this->MY_Model->g_count_where('agahi_car','zgr_agahi_car.car_cate_id',$cate_id);
        return $output['check_car'];

    }


    function car_list_ajax(){

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
        $totalRec = count($this->MY_Model->car_getRows());
        
        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = base_url().'site/Agahi/Car/car_list_ajax/0/';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $this->ajax_pagination->initialize($config);
        
        //get the posts data
        $output['agahi_car'] = $this->MY_Model->car_getRows(array('start'=>$offset,'limit'=>$this->perPage));
        
        $this->load->vars(array(
            'home_page' => TRUE
        ));
        $output['title'] = "كاربران";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        //load the view
        $this->load->view('site/Ajax_car_load', $output, false);
    }

    
    function car_cate_ajax(){

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
        $totalRec = count($this->MY_Model->car_cate_getRows($id));
        
        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = base_url().'site/Agahi/Car/car_cate_ajax/'. $id .'/';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $this->ajax_pagination->initialize($config);
        
        //get the posts data
        $output['agahi_car'] = $this->MY_Model->car_cate_getRows($id,array('start'=>$offset,'limit'=>$this->perPage));
        
        $this->load->vars(array(
            'home_page' => TRUE
        ));
        $output['title'] = "كاربران";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        //load the view
        $this->load->view('site/Ajax_car_load', $output, false);
    }


    function car_subcate_ajax(){

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
        $totalRec = count($this->MY_Model->car_subcate_getRows($id));
        
        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = base_url().'site/Agahi/Car/car_subcate_ajax/'. $id .'/';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $this->ajax_pagination->initialize($config);
        
        //get the posts data
        $output['agahi_car'] = $this->MY_Model->car_subcate_getRows($id,array('start'=>$offset,'limit'=>$this->perPage));
        
        $this->load->vars(array(
            'home_page' => TRUE
        ));
        $output['title'] = "كاربران";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        //load the view
        $this->load->view('site/Ajax_car_load', $output, false);
    }

    function car_user_list_ajax(){

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
        $totalRec = count($this->MY_Model->car_user_getRows($id));
        
        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = base_url().'site/Agahi/Car/car_user_list_ajax/'. $id .'/';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $this->ajax_pagination->initialize($config);
        
        //get the posts data
        $output['agahi_car'] = $this->MY_Model->car_user_getRows($id,array('start'=>$offset,'limit'=>$this->perPage));
        
        $this->load->vars(array(
            'home_page' => TRUE
        ));
        $output['title'] = "كاربران";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        //load the view
        $this->load->view('site/Ajax_car_load', $output, false);
    }

    function send_message() {

        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        
      
        $rand_code = $this->input->post('sec_code');
        $re_rand_code = $this->input->post('re_sec_code');

        $data = array(
            'id' => $this->input->post('id'),
            'message_tag' =>'Car',
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