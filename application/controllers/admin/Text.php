<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Text extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_text');
        $crud->set_subject('متن متحرك سايت');

        $crud->columns('text_title');
        $crud->display_as('text_title','عنوان متن');
        $crud->display_as('text_link','لينك متن');
        

        $crud->unset_clone();

        $crud->unset_texteditor('text_title','text_link');
      
        $output = $crud->render();
        $this->out_view($output);
    }
    function out_view($output = null) {
        
        $output->title = "متن متحرك سايت";
        $output->des = "مديريت و بررسي متن متحرك سايت ";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }


}