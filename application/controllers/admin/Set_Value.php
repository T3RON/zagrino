<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Set_Value extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_settings');
        $crud->set_subject('تنظیمات Api ها');

        $crud->columns('set_value','set_name','api_name');
        $crud->display_as('api_name','نام API');
        $crud->display_as('set_name','نام لاتین');
        $crud->display_as('set_value','مقدار');

      

      

        $crud->unset_clone();
        
        $crud->unset_texteditor(
            'api_name','set_name','set_value'
        );


  


        $output = $crud->render();
        $this->out_view($output);
    }
    function out_view($output = null) {
        
        $output->title = "تنظیمات بخش API ها";
        $output->des = "مديريت و بررسي API موجود";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }



    


}