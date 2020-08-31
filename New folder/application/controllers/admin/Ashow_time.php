<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Ashow_time extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_agahi_show_time');
        $crud->set_subject('زمان نمايش آگهي ها');

        $crud->columns('agahi_show_time_val','agahi_show_time_title');
        $crud->display_as('agahi_show_time_title','عنوان زمانبندي');
        $crud->display_as('agahi_show_time_val','مدت زمان نمايش');




        $crud->unset_clone();
      
        

        $crud->unset_texteditor('agahi_show_time_title','agahi_show_time_val');
      
        $output = $crud->render();
        $this->out_view($output);
    }
    function out_view($output = null) {
        
        $output->title = "زمان نمايش آگهي";
        $output->des = "مديريت و بررسي  زمان نمايش آگهي ";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }


}