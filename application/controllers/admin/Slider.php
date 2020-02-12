<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Slider extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_slider');
        $crud->set_subject('اسلايدر صفحه نخست');

        $crud->columns('slider_img');
        $crud->display_as('slider_link','لينك تصوير');
        $crud->display_as('slider_img','تصوير');
        
        $crud->set_field_upload('slider_img','assets/uploads/img');


        $crud->unset_clone();

        $crud->unset_texteditor('slider_link');
      
        $output = $crud->render();
        $this->out_view($output);
    }
    function out_view($output = null) {
        
        $output->title = "اسلايدر";
        $output->des = "مديريت و بررسي اسلايدر ";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }


}