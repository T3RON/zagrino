<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Ads extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_ads');
        $crud->set_subject('تبليغات');

        $crud->columns('ads_expire','ads_reg','postion_id','ads_title');
        $crud->display_as('ads_id','شناسه ');
        $crud->display_as('ads_title','عنوان تبليغ ');
        $crud->display_as('postion_id','مكان قرار گيري');
        $crud->display_as('ads_img','تصوير');
        $crud->display_as('ads_link','لينك');
        $crud->display_as('state_id','وضعيت');
        $crud->display_as('ads_reg','تاريخ ثبت');
        $crud->display_as('ads_expire','تعداد روزهاي نمايش');
        


        $crud->unset_clone();
      
        

        $crud->unset_texteditor('ads_expire','ads_reg','ads_link','ads_title');

        $crud->set_relation('postion_id','postion','postion_title');
        $crud->set_relation('state_id','state','state_title');

        $crud->set_field_upload('ads_img','assets/uploads/img');
        $crud->required_fields('ads_img','state_id','postion_id');
        
        $crud->unset_edit_fields('ads_reg');
        $crud->field_type('ads_reg', 'hidden', time());



        $output = $crud->render();
        $this->out_view($output);
    }
    function out_view($output = null) {
        
        $output->title = " گروه بندي وسايل نقليه";
        $output->des = "مديريت و بررسي زير گروه بندي وسايل نقليه ";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }


}