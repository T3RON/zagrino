<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Fmenu extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_footer_menu');
        $crud->set_subject('منوي پايين سايت');

        $crud->columns('footer_menu_title');
        $crud->display_as('footer_menu_title','عنوان منو');
        $crud->display_as('footer_menu_link','لينك منو');
        

        $crud->unset_clone();

        $crud->unset_texteditor('footer_menu_title','footer_menu_link');
      
        $output = $crud->render();
        $this->out_view($output);
    }
    function out_view($output = null) {
        
        $output->title = "منوي پايين سايت";
        $output->des = "مديريت و بررسي منوي پايين سايت ";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }


}