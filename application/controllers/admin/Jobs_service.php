<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Jobs_service extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_jobs_service');
        $crud->set_subject('امكانات و خدمات شغلي');

        $crud->columns('jobs_service_title');
        $crud->display_as('jobs_service_title','عنوان خدمت');
        $crud->display_as('jobs_service_ico','آيكون خدمت');
        
        $crud->set_field_upload('jobs_service_ico','assets/uploads/img');


        $crud->unset_clone();

        $crud->unset_texteditor('jobs_service_title');
      
        $output = $crud->render();
        $this->out_view($output);
    }
    function out_view($output = null) {
        
        $output->title = "امكانات و خدمات شغلي";
        $output->des = "مديريت و بررسي امكانات و خدمات شغلي ";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }


}