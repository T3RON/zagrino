<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Cstate extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
      

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_car_state');
        $crud->set_subject('وضعيت وسيله نقليه');

        $crud->columns('car_state_title');
        $crud->display_as('car_state_id','شناسه  ');
        $crud->display_as('car_state_title',' وضعيت وسيله نقليه');
        


        $crud->unset_clone();
      
        

        $crud->unset_texteditor('car_state_title');
      
        $output = $crud->render();
        $this->out_view($output);
    }
    function out_view($output = null) {
        
        $output->title = "   وضعيت وسيله نقليه";
        $output->des = "مديريت و بررسي وضعيت وسيله نقليه ";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }


}