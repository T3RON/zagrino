<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Jlist extends MY_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('Menu_Model');
    }

    function index()
    {
        $output['menu_top'] = $this->Menu_Model->select('menu');
        $output['menu_middel'] = $this->Menu_Model->select('secend_menu');
        $output['slider'] = $this->Menu_Model->select('slider');
        $output['text'] = $this->Menu_Model->select('text');
        $output['site'] = $this->MY_Model->select_single('site','1');
        $output['jobs_cate'] = $this->MY_Model->select('jobs_cate');
        //$output['bank_mashaghel'] = $this->Menu_Model->select_two_orderBy('jobs','state_id','DESC','jobs_register_date','ASC');
        $output['bank_mashaghel'] = $this->MY_Model->join_six('jobs','jobs_cate','jobs_sub_cate','accounts','ostan','city','state','jobs.state_id','DESC');


        $this->load->vars(array(
            'home_page' => TRUE
        ));
        $output['title'] = "كاربران";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('site/Jlist', $output);
    }


}