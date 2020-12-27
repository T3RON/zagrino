<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Index extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->library('ion_auth');
        $this->load->library('Jdf');
        $this->load->library('user_agent');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('Javascript');
        $this->load->library('Javascript/Jquery');
        $this->load->model('MY_Model');

    }

    function index()
    {
   
        $output['menu_top'] = $this->MY_Model->select('menu');
        $output['menu_middel'] = $this->MY_Model->select('secend_menu');
        $output['footer_menu'] = $this->MY_Model->select('footer_menu');
        $output['slider'] = $this->MY_Model->select('slider');
        $output['text'] = $this->MY_Model->select('text');
        $output['site'] = $this->MY_Model->select_single('site','1');
        $output['jobs_cate'] = $this->MY_Model->select_limit('jobs_cate','10');
        $output['agahi_cate'] = $this->MY_Model->select_limit('agahi_cate','10');
        $output['bank_mashaghel'] = $this->MY_Model->select_two_orderBy('jobs','state_id','DESC','register_date','ASC');
        $output['bank_mashaghel'] = $this->MY_Model->select_two_orderBy('jobs','state_id','DESC','register_date','ASC');
        $output['agahi'] = $this->MY_Model->join_five_withOrderBy('agahi','state','agahi_cate','city','agahi_cond_tag','agahi_state_kala','agahi.state_id','DESC','register_date','ASC');
        $output['title'] = 'سامانه گردشگري و تخفيفي زاگرينو';
        $output['des'] = 'مديريت و بررسي كاربران';
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('site/index',$output);
    }


}
