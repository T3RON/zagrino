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

        //Jobs 
        $output['jobs'] = $this->MY_Model->select_two_orderBy_limit('jobs','state_id','DESC','register_date','ASC',6);
        $output['jobs_cate'] = $this->MY_Model->select_limit('jobs_cate','10');

        //Amlak
        $output['amlak_cate'] = $this->MY_Model->select_limit('amlak_cate','10');
        $output['amlak'] = $this->MY_Model->join_three_withOrderBy_limit('agahi_amlak','state','ostan','city','agahi_amlak.state_id','2','register_date','ASC',6);


        //Agahi
        $output['agahi_cate'] = $this->MY_Model->select_limit('agahi_cate','10');
        $output['agahi'] = $this->MY_Model->join_five_withOrderBy_limit('agahi','state','agahi_cate','city','agahi_cond_tag','agahi_state_kala','agahi.state_id','ASC','register_date','ASC',4);

        //events
        $output['events_cate'] =  $this->MY_Model->select_limit('events_cate','10');
        $output['events'] = $this->MY_Model->join_three_withOrderBy_limit('events','state','ostan','city','events.state_id','2','register_date','ASC',6);

        //car
        $output['car_cate'] =  $this->MY_Model->select_limit('car_cate','10');
        $output['agahi_cars'] = $this->MY_Model->join_five_withOrderBy_limit('agahi_car','state','ostan','city','car_cate','car_sub_cate','agahi_car.state_id','2','register_date','ASC',6);

        $output['title'] = 'سامانه گردشگري و تخفيفي زاگرينو';
        $output['des'] = 'مديريت و بررسي كاربران';
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('site/index',$output);
    }

    function jobs_check_record($cate_id) {
        $output['check_mashaghel'] = $this->MY_Model->g_count_where('jobs','zgr_jobs.jobs_cate_id',$cate_id);
        return $output['check_mashaghel'];

    }

    function agahi_check_record($cate_id) {
        $output['check_agahi'] = $this->MY_Model->g_count_where('agahi','zgr_agahi.agahi_cate_id',$cate_id);
        return $output['check_agahi'];

    }

    function amlak_check_record($cate_id) {
        $output['check_amlak'] = $this->MY_Model->g_count_where('agahi_amlak','zgr_agahi_amlak.amlak_cate_id',$cate_id);
        return $output['check_amlak'];

    }

    function car_check_record($cate_id) {
        $output['check_car'] = $this->MY_Model->g_count_where('agahi_car','zgr_agahi_car.car_cate_id',$cate_id);
        return $output['check_car'];

    }

    function events_check_record($cate_id) {
        $output['check_events'] = $this->MY_Model->g_count_where('events','zgr_events.events_cate_id',$cate_id);
        return $output['check_events'];

    }


}