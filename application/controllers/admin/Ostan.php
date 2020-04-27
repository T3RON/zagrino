<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Ostan extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_ostan');
        $crud->set_subject('مديريت استان ها');

        $crud->columns('ostan_title');
        $crud->display_as('ostan_title','استان');
        


        $crud->unset_clone();
      
        

        $crud->unset_texteditor('ostan_title');
      
        $output = $crud->render();
        $this->out_view($output);
    }
    function out_view($output = null) {
        
        $output->title = " مديريت استان ها'";
        $output->des = "مديريت و بررسي استان ها    ";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }


}