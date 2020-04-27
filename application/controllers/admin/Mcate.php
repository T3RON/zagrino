<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Mcate extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_amlak_cate');
        $crud->set_subject(' گروه بندي املاك');

        $crud->columns('amlak_cate_title');
        $crud->display_as('amlak_cate_id','شناسه گروه بندي');
        $crud->display_as('amlak_cate_title','سر گروه');
        


        $crud->unset_clone();
      
        

        $crud->unset_texteditor('amlak_cate_title');
      
        $output = $crud->render();
        $this->out_view($output);
    }
    function out_view($output = null) {
        
        $output->title = "زير گروه بندي املاك";
        $output->des = "مديريت و بررسي  گروه بندي املاك ";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }


}