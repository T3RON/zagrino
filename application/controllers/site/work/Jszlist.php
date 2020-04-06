<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Jszlist extends MY_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('Menu_Model');
    }

    function index()
    {

        $id = $this->uri->segment('5');
        $id_cate = $this->uri->segment('6');
        $output['menu_top'] = $this->Menu_Model->select('menu');
        $output['menu_middel'] = $this->Menu_Model->select('secend_menu');
        $output['slider'] = $this->Menu_Model->select('slider');
        $output['text'] = $this->Menu_Model->select('text');
        $output['site'] = $this->MY_Model->select_single('site','1');
        $output['jobs_sub_zero_cate'] = $this->MY_Model->select_single_where('jobs_sub_cate','jobs_cate',$id_cate);
        $output['bank_mashaghel'] = $this->MY_Model->show_join_six('jobs','jobs_cate','jobs_sub_cate','accounts','ostan','city','state','jobs.state_id','DESC','zgr_jobs.jobs_sub_cate',$id);


        $this->load->vars(array(
            'home_page' => TRUE
        ));
        $output['title'] = "كاربران";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('site/Jszlist', $output);
    }


}