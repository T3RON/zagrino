<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Akala_state extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_agahi_state_kala');
        $crud->set_subject('وضعيت كالا آگهي ها');

        $crud->columns('agahi_state_kala_title');
        $crud->display_as('agahi_state_kala_title','وضعيت كالا آگهي');




        $crud->unset_clone();
      
        

        $crud->unset_texteditor('agahi_state_kala_title');
      
        $output = $crud->render();
        $this->out_view($output);
    }
    function out_view($output = null) {
        
        $output->title = "وضعيت  كالا";
        $output->des = "مديريت و بررسي  وضعيت  كالا ";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }


}