<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Positon extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_postion');
        $crud->set_subject('موقعيت تبليغات');

        $crud->columns('postion_title');
        $crud->display_as('postion_title','موقعيت ');



        $crud->unset_clone();
      
        

        $crud->unset_texteditor('postion_title');
        
        $crud->unset_fields('postion_id');



        $output = $crud->render();
        $this->out_view($output);
    }
    function out_view($output = null) {
        
        $output->title = "موقعيت تبليغات";
        $output->des = "مديريت و بررسي موقعيت تبليغات  ";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }


}