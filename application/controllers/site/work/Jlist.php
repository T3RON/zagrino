<?php
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
        $this->load->model('Menu_Model');
        $this->load->model('MY_Model');
        $this->load->library('Jdf');
    }

    function index()
    {
        $output['menu_top'] = $this->Menu_Model->select('menu');
        $output['menu_middel'] = $this->Menu_Model->select('secend_menu');
        $output['slider'] = $this->Menu_Model->select('slider');
        $output['text'] = $this->Menu_Model->select('text');
        $output['site'] = $this->MY_Model->select_single('site','1');
        $output['jobs_cate'] = $this->MY_Model->select('jobs_cate');
<<<<<<< HEAD
        $output['bank_mashaghel'] = $this->MY_Model->select_limit_orderby('jobs',8,'state_id','ASC');

        $output['menu_top'] = $this->Menu_Model->select('menu');
        $output['menu_middel'] = $this->Menu_Model->select('secend_menu');
        $output['footer_menu'] = $this->Menu_Model->select('footer_menu');

        $this->load->vars(array(
            'home_page' => TRUE
        ));
        $output['title'] = "كاربران";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('site/Jlist', $output);
    }

    function getJobsByCate() {
        $output['menu_top'] = $this->Menu_Model->select('menu');
        $output['menu_middel'] = $this->Menu_Model->select('secend_menu');
        $output['slider'] = $this->Menu_Model->select('slider');
        $output['text'] = $this->Menu_Model->select('text');
        $output['site'] = $this->MY_Model->select_single('site','1');
        
        
        $cate_id =$this->uri->segment(5);
        $output['bank_mashaghel'] = $this->MY_Model->select_single_where('jobs','jobs_cate',$cate_id);
        $output['jobs_cate'] = $this->MY_Model->select_where('jobs_sub_cate','jobs_cate_id',$cate_id);
        
        $output['menu_top'] = $this->Menu_Model->select('menu');
        $output['menu_middel'] = $this->Menu_Model->select('secend_menu');
        $output['footer_menu'] = $this->Menu_Model->select('footer_menu');
=======
        //$output['bank_mashaghel'] = $this->Menu_Model->select_two_orderBy('jobs','state_id','DESC','jobs_register_date','ASC');
        $output['bank_mashaghel'] = $this->MY_Model->join_six('jobs','jobs_cate','jobs_sub_cate','accounts','ostan','city','state','jobs.state_id','DESC');

>>>>>>> 9468fe3bde444b9ebda9abd472ff344833568748

        $this->load->vars(array(
            'home_page' => TRUE
        ));
        $output['title'] = "كاربران";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
<<<<<<< HEAD
        $this->load->view('site/Jlistsub', $output);
=======
        $this->load->view('site/Jlist', $output);
>>>>>>> 9468fe3bde444b9ebda9abd472ff344833568748
    }


}