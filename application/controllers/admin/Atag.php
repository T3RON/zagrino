<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Atag extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_agahi_tag');
        $crud->set_subject('برچسب آگهي ها');

        $crud->columns('agahi_tag_title');
        $crud->display_as('agahi_tag_title','عنوان برچسب ');




        $crud->unset_clone();
      
        

        $crud->unset_texteditor('agahi_tag_title');
      
        $output = $crud->render();
        $this->out_view($output);
    }
    function out_view($output = null) {
        
        $output->title = "برچسب  آگهي";
        $output->des = "مديريت و بررسي  برچسب  آگهي ";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }


}