<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class State extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_state');
        $crud->set_subject('مديريت وضعيت ها');

        $crud->columns('state_title');
        $crud->display_as('state_title','وضعيت');
        


        $crud->unset_clone();
      
        

        $crud->unset_texteditor('state_title');
      
        $output = $crud->render();
        $this->out_view($output);
    }
    function out_view($output = null) {
        
        $output->title = " مديريت وضعيت ها'";
        $output->des = "مديريت و بررسي وضعيت ها    ";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }


}