<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class City extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_city');
        $crud->set_subject('مديريت شهرستان ها');

        $crud->columns('ostan_id','city_title');
        $crud->display_as('ostan_id','استان');
        $crud->display_as('city_title','شهرستان');

        $crud->set_relation('ostan_id','zgr_ostan','ostan_title');



        $crud->unset_clone();
        $crud->unset_fields('city_id');
      
        

        $crud->unset_texteditor('city_title');
      
        $output = $crud->render();
        $this->out_view($output);
    }
    function out_view($output = null) {
        
        $output->title = "مديريت شهرستان ها";
        $output->des = "مديريت و بررسي شهرستان ها ";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }


}