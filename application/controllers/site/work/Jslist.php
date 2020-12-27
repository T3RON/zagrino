<?php
include_once(APPPATH.'core/CI_Panel.php');
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Jslist extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->library('Jdf');
        $this->load->library('user_agent');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('Accesscontrol');
        $this->load->library('Javascript');
        $this->load->library('Javascript/Jquery');
        $this->load->model('MY_Model');
    }

    function index()
    {

        $id = $this->uri->segment('5');
        $output['menu_top'] = $this->MY_Model->select('menu');
        $output['menu_middel'] = $this->MY_Model->select('secend_menu');
        $output['footer_menu'] = $this->MY_Model->select('footer_menu');
        $output['slider'] = $this->MY_Model->select('slider');
        $output['text'] = $this->MY_Model->select('text');
        $output['site'] = $this->MY_Model->select_single('site','1');
        $output['jobs_sub_cate'] = $this->MY_Model->select_single_where('jobs_sub_cate','jobs_cate',$id);
        $output['bank_mashaghel'] = $this->MY_Model->show_join_six_with_order('jobs','jobs_cate','jobs_sub_cate','accounts','ostan','city','state','jobs.state_id','DESC','zgr_jobs.jobs_cate',$id);


        $this->load->vars(array(
            'home_page' => TRUE
        ));
        $output['title'] = "كاربران";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('site/Jslist', $output);
    }


}
