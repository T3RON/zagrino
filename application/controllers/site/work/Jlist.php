<?php
include_once(APPPATH.'core/CI_Panel.php');
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Jlist extends CI_Controller {
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
        $output['jobs_cate'] =  $this->MY_Model->select('jobs_cate');


        
        $data = array();
        
        //total rows count
        $totalRec = count($this->MY_Model->jobs_getRows());
        
        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = base_url().'site/work/Jlist/jobs_list_ajax/';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $this->ajax_pagination->initialize($config);
        
        //get the posts data
        $output['jobs'] = $this->MY_Model->jobs_getRows(array('limit'=>$this->perPage));
        
        

        $this->load->vars(array(
            'home_page' => TRUE
        ));
        $output['title'] = "كاربران";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('site/Jlist', $output);
    }



    function jobs_list_ajax(){

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
        $totalRec = count($this->MY_Model->jobs_getRows());
        
        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = base_url().'site/work/Jlist/jobs_list_ajax/';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $this->ajax_pagination->initialize($config);
        
        //get the posts data
        $output['agahi_car'] = $this->MY_Model->jobs_getRows(array('start'=>$offset,'limit'=>$this->perPage));
        
        $this->load->vars(array(
            'home_page' => TRUE
        ));
        $output['title'] = "كاربران";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        //load the view
        $this->load->view('site/Ajax_jobs_load', $output, false);
    }


}