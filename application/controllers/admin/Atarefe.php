<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Atarefe extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_agahi_tarefe');
        $crud->set_subject('تعرفه آگهي');

        $crud->columns('agahi_tarefe_price','agahi_tarefe_title');
        $crud->display_as('agahi_tarefe_price','هزينه تعرفه');
        $crud->display_as('agahi_tarefe_title','عنوان تعرفه');



        $crud->unset_clone();
      
        

        $crud->unset_texteditor('agahi_tarefe_price','agahi_tarefe_title');
      
        $output = $crud->render();
        $this->out_view($output);
    }
    function out_view($output = null) {
        
        $output->title = "تعرفه آگهي";
        $output->des = "مديريت و بررسي  تعرفه آگهي ";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }


}