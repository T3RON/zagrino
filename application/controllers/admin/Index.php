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

        $crud->set_table('news');
        $crud->set_subject('اخبار باشگاه');

        $crud->columns('news_date','news_text','news_title');
        $crud->display_as('news_title','عنوان خبر');
        $crud->display_as('news_text','متن خبر');
        $crud->display_as('news_date','تاریخ خبر');

        $crud->add_action('افزودن روز', '', 'Jalase_day/index/add', 'fa-plus');

        //$crud->set_field_upload('news_title','assets/uploads/files');
        $crud->field_type('news_title', 'enum', $news_id);


        $crud->required_fields('news_title');

        $crud->unset_clone();
        //$crud->unset_texteditor('news_title','news_date');
        $crud->unset_texteditor('news_title','full_text');
        $crud->unset_texteditor('news_date','full_text');


        $output = $crud->render();

        $this->out_view($output);
    }
    function out_view($output = null) {
        $output->title = "اخبار باشگاه";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }


}