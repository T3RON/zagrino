<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Jobs extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_jobs');
        $crud->set_subject('مديران');

        $crud->columns('jobs_register_date','jobs_title','account_id');
        $crud->display_as('jobs_id','شناسه');
        $crud->display_as('account_id','كاربر');
        $crud->display_as('ostan_id','استان');
        $crud->display_as('city_id','شهرستان');
        $crud->display_as('jobs_title','عنوان شغل');
        $crud->display_as('jobs_shobe','نام شعبه');
        $crud->display_as('jobs_content','توضيح شغل');
        $crud->display_as('jobs_work_titme','ساعت كاري');
        $crud->display_as('jobs_mobile','موبايل');
        $crud->display_as('jobs_tell','تلفن ثابت');
        $crud->display_as('jobs_fax','فكس');
        $crud->display_as('jobs_email','ايميل');
        $crud->display_as('jobs_code_posti','كدپستي');
        $crud->display_as('jobs_website','وب سايت');
        $crud->display_as('jobs_instagram','اينستاگرام');
        $crud->display_as('jobs_telegram','تلگرام');
        $crud->display_as('jobs_whatsapp','واتساپ');
        $crud->display_as('jobs_facebook','فيسبوك');
        $crud->display_as('jobs_tw','توِيتر');
        $crud->display_as('jobs_pinterest','پينترست');
        $crud->display_as('jobs_youtube','يوتوب');
        $crud->display_as('jobs_address','آدرس');
        $crud->display_as('jobs_map_latitude','latitude');
        $crud->display_as('jobs_map_longitude','longitude');
        $crud->display_as('jobs_count_namayandegi','تعداد نمايندگي ها');
        $crud->display_as('jobs_count_namayandegi_in_city','تعداد نمايندگي شهر');
        $crud->display_as('jobs_sharayet','شرايط فروش');
        $crud->display_as('jobs_list_service','ليست خدمات و سرويس');
        $crud->display_as('jobs_lohe_taghdir','لوحه تقدير ها');
        $crud->display_as('jobs_mojavez','مجوز ها');
        $crud->display_as('jobs_register_date','تاريخ ثبت شغل');
        $crud->display_as('jobs_update_date','تاريخ آپديت');
        $crud->display_as('state_id','وضعيت');

        $crud->set_relation('ostan_id','ostan','ostan_title');
        $crud->set_relation('city_id','city','city_title');
        $crud->set_relation('state_id','state','state_title');
        
        $crud->add_action('افزودن روز', '', 'Jalase_day/index/add', 'fa-plus');

        //$crud->set_field_upload('news_title','assets/uploads/files');
        //$crud->field_type('username','date');


        $crud->required_fields('username');

        $crud->unset_clone();
        $crud->unset_texteditor(
            'jobs_title','jobs_shobe','jobs_mobile','jobs_tell','jobs_fax','jobs_email','jobs_code_posti','jobs_website',
            'jobs_instagram','jobs_telegram','jobs_whatsapp','jobs_facebook','jobs_tw','jobs_pinterest','jobs_youtube',
            'jobs_map_latitude','jobs_map_longitude','jobs_count_namayandegi','jobs_count_namayandegi_in_city','jobs_register_date',
            'jobs_update_date'
        );


        $output = $crud->render();

        $this->out_view($output);
    }
    function out_view($output = null) {
        $output->title = "بانك مشاغل";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }


}