<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Jscate extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_jobs_sub_cate');
        $crud->set_subject('زير گروه بندي مشاغل');

        $crud->columns('jobs_sub_cate_title','jobs_cate_id');
        $crud->display_as('jobs_sub_cate_id','شناسه گروه بندي');
        $crud->display_as('jobs_cate_id','سر گروه');
        $crud->display_as('jobs_sub_cate_title','عنوان زير گروه');
        
        $crud->set_relation('jobs_cate_id','jobs_cate','jobs_cate_title');


        $crud->unset_clone();
      
        

        $crud->unset_texteditor('jobs_sub_cate_title');
      
        $output = $crud->render();
        $this->out_view($output);
    }
    function out_view($output = null) {
        
        $output->title = "زير گروه بندي مشاغل";
        $output->des = "مديريت و بررسي زير گروه بندي مشاغل ";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }


}