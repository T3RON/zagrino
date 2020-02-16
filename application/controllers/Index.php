<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Index extends MY_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->library('javascript');
        $this->load->library('javascript/jquery');
        $this->load->model('Menu_Model');
        $this->load->model('MY_Model');

    }

    function index()
    {
   
        $output['menu_top'] = $this->Menu_Model->select('menu');
        $output['menu_middel'] = $this->Menu_Model->select('secend_menu');
        $output['slider'] = $this->Menu_Model->select('slider');
        $output['text'] = $this->Menu_Model->select('text');
        $output['site'] = $this->MY_Model->select_single('site','1');
        $output['jobs_cate'] = $this->MY_Model->select_limit('jobs_cate','5');


      
        $output['title'] = "سامانه گردشگري و تخفيفي زاگرينو";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('site/index',$output);
    }


}