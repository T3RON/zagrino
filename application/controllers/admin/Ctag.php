<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Ctag extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_car_tag');
        $crud->set_subject('برچسب وسيله نقليه');

        $crud->columns('car_tag_title');
        $crud->display_as('car_tag_title','عنوان برچسب ');




        $crud->unset_clone();
      
        

        $crud->unset_texteditor('car_tag_title');
      
        $output = $crud->render();
        $this->out_view($output);
    }
    function out_view($output = null) {
        
        $output->title = "برچسب  وسيله نقليه";
        $output->des = "مديريت و بررسي  برچسب  وسيله نقليه ";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }


}