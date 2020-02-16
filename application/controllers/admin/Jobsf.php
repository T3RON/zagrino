<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Jobsf extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_jobs');
        $crud->set_subject('شغل');
        $crud->where('zgr_jobs.state_id',1);

        $crud->columns('jobs_register_date','jobs_title','account_id');
        $crud->display_as('jobs_id','شناسه');
        $crud->display_as('jobs_cate_id','گروه بندي');
        $crud->display_as('jobs_sub_cate_id',' زير گروه بندي');
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
        $crud->display_as('jobs_video','ويدئو');
        $crud->display_as('jobs_register_date','تاريخ ثبت شغل');
        $crud->display_as('jobs_update_date','تاريخ آپديت');
        $crud->display_as('state_id','وضعيت');
        $crud->display_as('jobs_logo','لوگو');
        $crud->display_as('jobs_shoar','شعار');
        $crud->display_as('category_id','گروه بندي');
        $crud->display_as('jobs_price','قيمت');
        $crud->display_as('jobs_service_id','سرويس ها');

        $crud->set_relation('ostan_id','ostan','ostan_title');
        $crud->set_relation('city_id','city','city_title');
        $crud->set_relation('state_id','state','state_title');
        $crud->set_relation('jobs_cate_id','jobs_cate','jobs_cate_title');
        $crud->set_relation('jobs_sub_cate_id','jobs_sub_cate','jobs_sub_cate_title');
        $crud->set_relation('account_id','accounts','account_mobile');
        $crud->set_relation('account_id','accounts','account_mobile');
        $crud->set_relation_n_n('jobs_service_id', 'rel_jobs_service', 'jobs_service', 'jobs_id', 'jobs_service_id', 'jobs_service_title');

        
        $crud->add_action('افزودن تصوير', '', 'Jobs_images/index', 'fa-photo');

        $this->load->library('gc_dependent_select');

        $crud->unset_add_fields('jobs_id');
        $crud->unset_edit_fields('jobs_id');
        $crud->field_type('jobs_register_date', 'invisible', $this->jdf->jdate('l, j F Y',time(),'','GMT'));
        $crud->field_type('jobs_update_date', 'invisible', $this->jdf->jdate('l, j F Y',time(),'','GMT'));

        $crud->set_field_upload('jobs_logo','assets/uploads/img');
        $crud->set_field_upload('jobs_video','assets/uploads/videos');
        //$crud->field_type('username','date');


        //$crud->required_fields('username');

        $crud->unset_clone();
        $crud->unset_texteditor(
            'jobs_title','jobs_shobe','jobs_mobile','jobs_tell','jobs_fax','jobs_email','jobs_code_posti','jobs_website',
            'jobs_instagram','jobs_telegram','jobs_whatsapp','jobs_facebook','jobs_tw','jobs_pinterest','jobs_youtube',
            'jobs_map_latitude','jobs_map_longitude','jobs_count_namayandegi','jobs_count_namayandegi_in_city','jobs_register_date',
            'jobs_update_date','jobs_shoar','jobs_price'
        );


        $fields_cate = array(

            // first field:
            'jobs_cate_id' => array( // first dropdown name
            'table_name' => 'jobs_cate', // table of country
            'title' => 'jobs_cate_title', // country title
            'relate' => null // the first dropdown hasn't a relation
            ),
            // second field
            'jobs_sub_cate_id' => array ( // second dropdown name
            'table_name' => 'jobs_sub_cate', // table of state
            'title' => 'jobs_sub_cate_title', // state title
            'id_field' => 'jobs_sub_cate_id', // table of state: primary key
            'relate' => 'jobs_cate_id', // table of state:
            'data-placeholder' => 'انتخاب زير گروه' //dropdown's data-placeholder:
            )
                );

            $config_cate = array(
                'main_table' => 'zgr_jobs',
                'main_table_primary' => 'jobs_id',
                "url" => base_url().'admin/'. __CLASS__ . '/' . __FUNCTION__ .  '/'
                //'ajax_loader' => base_url() . 'ajax-loader.gif', // path to ajax-loader image. It's an optional parameter
                //'segment_name' =>'get_items' // It's an optional parameter. by default "get_items"
             );

             $categories = new gc_dependent_select($crud, $fields_cate, $config_cate);
             $js_cate = $categories->get_js();


        $fields = array(

            // first field:
            'ostan_id' => array( // first dropdown name
            'table_name' => 'ostan', // table of country
            'title' => 'ostan_title', // country title
            'relate' => null // the first dropdown hasn't a relation
            ),
            // second field
            'city_id' => array ( // second dropdown name
            'table_name' => 'city', // table of state
            'title' => 'city_title', // state title
            'id_field' => 'city_id', // table of state: primary key
            'relate' => 'ostan_id', // table of state:
            'data-placeholder' => 'انتخاب شهر' //dropdown's data-placeholder:
            )
                );

                $config_ostan = array(
                    'main_table' => 'zgr_jobs',
                    'main_table_primary' => 'jobs_id',
                    "url" => base_url().'admin/'. __CLASS__ . '/' . __FUNCTION__ .  '/',
                    //'ajax_loader' => base_url() . 'ajax-loader.gif', // path to ajax-loader image. It's an optional parameter
                    'segment_name' =>'get_cts' // It's an optional parameter. by default "get_items"
                    );
                    
                    $ostan = new gc_dependent_select($crud, $fields, $config_ostan);
                   
                    $js_ostan = $ostan->get_js();
                    
                    $output = $crud->render();
                    $output->output.= $js_ostan . $js_cate;
        $this->out_view($output);
    }
    function out_view($output = null) {
        
        $output->title = "بانك مشاغل";
        $output->des = "مديريت و بررسي مشاغل موجود";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }


}