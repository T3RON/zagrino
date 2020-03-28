<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Cctag extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_car_cond_tag');
        $crud->set_subject('برچسب شرايط وسيله نقليه');

        $crud->columns('car_cond_tag_title');
        $crud->display_as('car_cond_tag_title',' عنوان برچسب شرايط');




        $crud->unset_clone();
      
        

        $crud->unset_texteditor('car_cond_tag_title');
      
        $output = $crud->render();
        $this->out_view($output);
    }
    function out_view($output = null) {
        
        $output->title = "برچسب شرايط وسيله نقليه";
        $output->des = "مديريت و بررسي  برچسب شرايط وسيله نقليه ";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }


}