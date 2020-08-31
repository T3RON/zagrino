<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Index extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_users');
        $crud->set_subject('مديران');

        $crud->columns('company','email','username');
        $crud->display_as('username','نام كاربري');
        $crud->display_as('email','ايميل');
        $crud->display_as('company','كمپاني');

        //$crud->add_action('افزودن روز', '', 'Jalase_day/index/add', 'fa-plus');

        //$crud->set_field_upload('news_title','assets/uploads/files');
        //$crud->field_type('username','date');


        $crud->required_fields('username');

        $crud->unset_clone();
        //$crud->unset_texteditor('news_title','news_date');
        $crud->unset_texteditor('username','full_text');
        $crud->unset_texteditor('username','full_text');


        $output = $crud->render();

        $this->out_view($output);
    }
    function out_view($output = null) {
        $output->title = "مديران";
        $output->des = "ليست مديران سامانه زاگرينو";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }


}