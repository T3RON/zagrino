<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Agahi extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_agahi');
        $crud->set_subject('نيازمندي');

        $crud->columns('state_id','agahi_reg_date','agahi_title','accounts_id');
        $crud->display_as('agahi_id','شناسه');
        $crud->display_as('agahi_cate_id','گروه بندي');
        $crud->display_as('agahi_sub_cate_id',' زير گروه بندي');
        $crud->display_as('accounts_id','كاربر');
        $crud->display_as('ostan_id','استان');
        $crud->display_as('city_id','شهرستان');
        $crud->display_as('agahi_title','عنوان نيازمندي');
        $crud->display_as('agahi_hoghoghi_or_haghighi','نوع آگهي');
        $crud->display_as('agahi_sazeman_title','عنوان سازمان');
        $crud->display_as('tarefe_id','تعرفه');
        $crud->display_as('show_id','مدت نمايش');
        $crud->display_as('agahi_reg_date','تاريخ ثبت');
        $crud->display_as('agahi_update_date','تاريخ آپديت');
        $crud->display_as('state_id','وضعيت');
        $crud->display_as('agahi_des','توضيح مختصر');
        $crud->display_as('agahi_tell','تلفن ثابت');
        $crud->display_as('agahi_latitude','طول جغرافيايي');
        $crud->display_as('agahi_longitude','عرض جغرافيايي');
        $crud->display_as('agahi_tag_conditions_id','برچسب شرايط');
        $crud->display_as('agahi_address','آدرس');
        $crud->display_as('agahi_tag_id','برچسب');
        $crud->display_as('agahi_price	','قيمت');
        $crud->display_as('agahi_full_des','توضيحات كامل');
        $crud->display_as('agahi_email','ايميل');
        $crud->display_as('agahi_kala_state_id	','وضعيت كالا');
     
        $crud->set_relation('ostan_id','ostan','ostan_title');
        $crud->set_relation('city_id','city','city_title');
        $crud->set_relation('state_id','state','state_title');
        $crud->set_relation('agahi_cate_id','agahi_cate','agahi_cate_title');
        $crud->set_relation('agahi_sub_cate_id','agahi_sub_cate','agahi_sub_cate_title');
        $crud->set_relation('accounts_id','accounts','account_mobile');
        //$crud->set_relation_n_n('jobs_service_id', 'rel_jobs_service', 'jobs_service', 'jobs_id', 'jobs_service_id', 'jobs_service_title');

        
        //$crud->add_action('افزودن تصوير', '', 'Jobs_images/index', 'fa-photo');

        $this->load->library('gc_dependent_select');

        $crud->unset_add_fields('agahi_id');
        $crud->unset_edit_fields('agahi_id');
        $crud->field_type('agahi_reg_date', 'invisible', $this->jdf->jdate('l, j F Y',time(),'','GMT'));
        $crud->field_type('agahi_update_date', 'invisible', $this->jdf->jdate('l, j F Y',time(),'','GMT'));

        //$crud->set_field_upload('jobs_logo','assets/uploads/img');
        //$crud->set_field_upload('jobs_video','assets/uploads/videos');
        //$crud->field_type('username','date');


      
        //$crud->required_fields('username');

        $crud->unset_clone();
        
        $crud->unset_texteditor(
            'jobs_title','jobs_shobe','jobs_mobile','jobs_tell','jobs_fax','jobs_email','jobs_code_posti','jobs_website',
            'jobs_instagram','jobs_telegram','jobs_whatsapp','jobs_facebook','jobs_tw','jobs_pinterest','jobs_youtube',
            'jobs_count_namayandegi','jobs_count_namayandegi_in_city','jobs_register_date',
            'jobs_update_date','jobs_shoar','jobs_price'
        );


        $fields_cate = array(

            // first field:
            'agahi_cate_id' => array( // first dropdown name
            'table_name' => 'agahi_cate', // table of country
            'title' => 'agahi_cate_title', // country title
            'relate' => null // the first dropdown hasn't a relation
            ),
            // second field
            'agahi_sub_cate_id' => array ( // second dropdown name
            'table_name' => 'agahi_sub_cate', // table of state
            'title' => 'agahi_sub_cate_title', // state title
            'id_field' => 'agahi_sub_cate_id', // table of state: primary key
            'relate' => 'agahi_cate_id', // table of state:
            'data-placeholder' => 'انتخاب زير گروه' //dropdown's data-placeholder:
            )
                );

            $config_cate = array(
                'main_table' => 'zgr_agahi',
                'main_table_primary' => 'agahi_id',
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
                    'main_table' => 'zgr_agahi',
                    'main_table_primary' => 'agahi_id',
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
        
        $output->title = "بانك نيازمندي ها";
        $output->des = "مديريت و بررسي نيازمندي موجود";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }



    


}