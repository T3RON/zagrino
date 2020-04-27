<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Ccate extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_car_cate');
        $crud->set_subject(' گروه بندي وسايل نقليه');

        $crud->columns('car_cate_title');
        $crud->display_as('car_cate_id','شناسه گروه بندي');
        $crud->display_as('car_cate_title','سر گروه');
        


        $crud->unset_clone();
      
        

        $crud->unset_texteditor('car_cate_title');
      
        $output = $crud->render();
        $this->out_view($output);
    }
    function out_view($output = null) {
        
        $output->title = " گروه بندي وسايل نقليه";
        $output->des = "مديريت و بررسي زير گروه بندي وسايل نقليه ";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }


}