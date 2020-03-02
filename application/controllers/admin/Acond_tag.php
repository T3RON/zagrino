<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Acond_tag extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_agahi_cond_tag');
        $crud->set_subject('برچسب شرايط آگهي ها');

        $crud->columns('agahi_cond_tag_title');
        $crud->display_as('agahi_cond_tag_title','عنوان برچسب شرايط');




        $crud->unset_clone();
      
        

        $crud->unset_texteditor('agahi_cond_tag_title');
      
        $output = $crud->render();
        $this->out_view($output);
    }
    function out_view($output = null) {
        
        $output->title = "برچسب شرايط آگهي";
        $output->des = "مديريت و بررسي  برچسب شرايط آگهي ";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }


}