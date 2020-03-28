<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Cbody extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
      

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_car_body');
        $crud->set_subject('نوع بدنه وسيله نقليه');

        $crud->columns('car_body_title');
        $crud->display_as('car_body_id','شناسه  ');
        $crud->display_as('car_body_title',' نوع بدنه وسيله نقليه');
        


        $crud->unset_clone();
      
        

        $crud->unset_texteditor('car_body_title');
      
        $output = $crud->render();
        $this->out_view($output);
    }
    function out_view($output = null) {
        
        $output->title = "   بدنه وسيله نقليه";
        $output->des = "مديريت و بررسي بدنه وسيله نقليه ";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }


}