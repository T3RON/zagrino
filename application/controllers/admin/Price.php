<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Price extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_price');
        $crud->set_subject('هزینه ها');

        $crud->columns('price_amount','price_title');
        $crud->display_as('price_title','عنوان بخش ');
        $crud->display_as('price_amount','هزینه ');



        


        $crud->unset_clone();
        $crud->unset_add();
      
        

        $crud->unset_texteditor('price_amount','price_title');



        $output = $crud->render();
        $this->out_view($output);
    }


 


    function out_view($output = null) {
        
        $output->title = "ليست هزینه ها ";
        $output->des = "مديريت و بررسي هزینه ها  ";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }


}