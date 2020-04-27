<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Csokht extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
      

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_car_sokht');
        $crud->set_subject('سوخت وسيله نقليه');

        $crud->columns('car_sokht_title');
        $crud->display_as('car_sokht_id','شناسه  ');
        $crud->display_as('car_sokht_title',' نوع سوخت وسيله نقليه');
        


        $crud->unset_clone();
      
        

        $crud->unset_texteditor('car_sokht_title');
      
        $output = $crud->render();
        $this->out_view($output);
    }
    function out_view($output = null) {
        
        $output->title = "   سوخت وسيله نقليه";
        $output->des = "مديريت و بررسي سوخت وسيله نقليه ";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }


}