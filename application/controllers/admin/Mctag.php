<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Mctag extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_amlak_cond_tag');
        $crud->set_subject('برچسب شرايط املاك ');

        $crud->columns('amlak_cond_tag_title');
        $crud->display_as('amlak_cond_tag_title',' عنوان برچسب شرايط');




        $crud->unset_clone();
      
        

        $crud->unset_texteditor('amlak_cond_tag_title');
      
        $output = $crud->render();
        $this->out_view($output);
    }
    function out_view($output = null) {
        
        $output->title = "برچسب  املاك";
        $output->des = "مديريت و بررسي  برچسب  املاك ";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }


}