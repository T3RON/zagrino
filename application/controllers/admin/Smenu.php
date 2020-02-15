<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Smenu extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_secend_menu');
        $crud->set_subject('منو');

        $crud->columns('smenu_title');
        $crud->display_as('smenu_title','عنوان منو');
        $crud->display_as('smenu_link','لينك منو');
        

        $crud->unset_clone();

        $crud->unset_texteditor('smenu_title','smenu_link');
      
        $output = $crud->render();
        $this->out_view($output);
    }
    function out_view($output = null) {
        
        $output->title = "منو پايين";
        $output->des = "مديريت و بررسي منو ";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }


}