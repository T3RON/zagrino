<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Amlak extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_agahi_amlak');
        $crud->set_subject('املاك');

        $crud->columns('state_id','amlak_date_register','amlak_bonga_title','accounts_id');
        $crud->display_as('agahi_amlak_id','شناسه');
        $crud->display_as('amlak_cate_id','گروه بندي');
        $crud->display_as('amlak_sub_cate_id',' زير گروه بندي');
        $crud->display_as('accounts_id','كاربر');
        $crud->display_as('ostan_id','استان');
        $crud->display_as('city_id','شهرستان');
        $crud->display_as('amlak_bonga_title','عنوان ملك');
        $crud->display_as('amlak_des','توضيحات');
        $crud->display_as('amlak_full_des','توضيحات كامل');
        $crud->display_as('amlak_agahi_dahande','آگهي دهنده');
        $crud->display_as('amlak_sanad_state','وضعيت سند');
        $crud->display_as('amlak_mizan_malekiat','ميزان مالكيت');
        $crud->display_as('amlak_metraj','متراژ');
        $crud->display_as('amlak_ejare_price','مبلغ اجاره');
        $crud->display_as('amlak_sanad_type','نوع سند');
        $crud->display_as('amlak_rahn_price','رهن');
        $crud->display_as('amlak_count_room','تعداد اتاق');
        $crud->display_as('amlak_tabaghe','طبقه');
        $crud->display_as('amlak_parking','پاركينگ');
        $crud->display_as('amlak_emtiaz','امتيازات');
        $crud->display_as('amlak_anbari','انباري');
        $crud->display_as('amlak_asansor','آسانسور');
        $crud->display_as('amlak_address','آدرس');
        $crud->display_as('amlak_lat','طول جغرافيايي');
        $crud->display_as('amlak_long','عرض جغرافيايي');
        $crud->display_as('amlak_price','قيمت فروش');
        $crud->display_as('state_id','وضعيت آگهي');
        $crud->display_as('amlak_tag_id','برچسب');
        $crud->display_as('amlak_cond_tag_id','برچسب شرايط');
        $crud->display_as('state_id','وضعيت آگهي');
        $crud->display_as('amlak_date_register','تاريخ ثبت');
      
     
        $crud->set_relation('ostan_id','ostan','ostan_title');
        $crud->set_relation('city_id','city','city_title');
        $crud->set_relation('state_id','state','state_title');
        $crud->set_relation('amlak_cate_id','amlak_cate','amlak_cate_title');
        $crud->set_relation('amlak_sub_cate_id','amlak_sub_cate','amlak_sub_cate_title');
        $crud->set_relation('accounts_id','accounts','account_mobile');
        $crud->set_relation('amlak_cond_tag_id','amlak_cond_tag','amlak_cond_tag_title');
        $crud->set_relation('amlak_tag_id','amlak_tag','amlak_tag_title');
        //$crud->set_relation_n_n('jobs_service_id', 'rel_jobs_service', 'jobs_service', 'jobs_id', 'jobs_service_id', 'jobs_service_title');

        
        //$crud->add_action('افزودن تصوير', '', 'Jobs_images/index', 'fa-photo');

        $this->load->library('gc_dependent_select');

        $crud->unset_add_fields('agahi_id');
        $crud->unset_edit_fields('agahi_id');
        $crud->field_type('amlak_date_register', 'invisible', $this->jdf->jdate('l, j F Y',time(),'','GMT'));
        $crud->field_type('amlak_date_update', 'invisible', $this->jdf->jdate('l, j F Y',time(),'','GMT'));

        //$crud->set_field_upload('jobs_logo','assets/uploads/img');
        //$crud->set_field_upload('jobs_video','assets/uploads/videos');
        //$crud->field_type('username','date');


      
        //$crud->required_fields('username');

        $crud->unset_clone();
        
        $crud->unset_texteditor(
            'amlak_bonga_title','amlak_des','amlak_agahi_dahande','amlak_sanad_state','amlak_mizan_malekiat','amlak_metraj','amlak_rahn_price',
            'amlak_count_room','amlak_tabaghe','amlak_parking','amlak_emtiaz','amlak_anbari','amlak_asansor','amlak_price',
            'amlak_ejare_price','amlak_sanad_type','amlak_lat','amlak_long',
            'jobs_update_date','jobs_shoar','jobs_price'
        );

  

        $fields_cate = array(

            // first field:
            'amlak_cate_id' => array( // first dropdown name
            'table_name' => 'amlak_cate', // table of country
            'title' => 'amlak_cate_title', // country title
            'relate' => null // the first dropdown hasn't a relation
            ),
            // second field
            'amlak_sub_cate_id' => array ( // second dropdown name
            'table_name' => 'amlak_sub_cate', // table of state
            'title' => 'amlak_sub_cate_title', // state title
            'id_field' => 'amlak_sub_cate_id', // table of state: primary key
            'relate' => 'amlak_cate_id', // table of state:
            'data-placeholder' => 'انتخاب زير گروه' //dropdown's data-placeholder:
            )
                );

            $config_cate = array(
                'main_table' => 'zgr_agahi_amlak',
                'main_table_primary' => 'agahi_amlak_id',
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