<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Ascate extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_agahi_sub_cate');
        $crud->set_subject('زير گروه آگهي ها');

        $crud->columns('agahi_cate_id','agahi_sub_cate_title');
        $crud->display_as('agahi_sub_cate_id','شناسه گروه بندي');
        $crud->display_as('agahi_cate_id','سر گروه');
        $crud->display_as('agahi_sub_cate_title','زير گروه');

        $crud->set_relation('agahi_cate_id','agahi_cate','agahi_cate_title');



        $crud->unset_clone();
      
        

        $crud->unset_texteditor('agahi_sub_cate_title');
      
        $output = $crud->render();
        $this->out_view($output);
    }
    function out_view($output = null) {
        
        $output->title = "زير گروه بندي آگهي";
        $output->des = "مديريت و بررسي  گروه بندي آگهي ";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }


}