<?php
include_once(APPPATH.'core/CI_Panel.php');
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Amlak extends CI_Panel {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_agahi_amlak');
        $crud->set_subject('املاك');

        $crud->columns('state_id','expire','update_date','register_date','amlak_bonga_title','accounts_id');
        $crud->display_as('agahi_amlak_id','شناسه');
        $crud->display_as('amlak_cate_id','گروه بندي');
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
        $crud->display_as('img1','تصوير شماره 1');
        $crud->display_as('img2','تصوير شماره 2');
        $crud->display_as('img3','تصوير شماره 3');
        $crud->display_as('img4','تصوير شماره 4');
        $crud->display_as('img5','تصوير شماره 5');
        $crud->display_as('img6','تصوير شماره 6');
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
        $crud->display_as('register_date','تاريخ ثبت');
        $crud->display_as('update_date','تاريخ آپديت');
        $crud->display_as('days','تعداد روزهاي نمايش');
        $crud->display_as('expire','تاريخ انقضا');
      
        $crud->where('zgr_agahi_amlak.accounts_id',$this->session->userdata('accounts_id'));
        $crud->unset_clone();
        $crud->unset_add();
        if($this->session->userdata('state_id') != 2) {
            $crud->unset_edit();
        }
        $this->load->vars(array(
            'home_page' => FALSE
        ));
     
        $crud->set_relation('ostan_id','ostan','ostan_title');
        $crud->set_relation('city_id','city','city_title');
        $crud->set_relation('state_id','state','state_title');
        $crud->set_relation('amlak_cate_id','amlak_cate','amlak_cate_title');
        $crud->set_relation('accounts_id','accounts','account_mobile');
        $crud->set_relation('amlak_cond_tag_id','amlak_cond_tag','amlak_cond_tag_title');
        $crud->set_relation('amlak_tag_id','amlak_tag','amlak_tag_title');
        //$crud->set_relation_n_n('jobs_service_id', 'rel_jobs_service', 'jobs_service', 'jobs_id', 'jobs_service_id', 'jobs_service_title');

        
        //$crud->add_action('افزودن تصوير', '', 'Jobs_images/index', 'fa-photo');

        $this->load->library('gc_dependent_select');

        $crud->unset_add_fields('agahi_amlak_id');
        $crud->unset_edit_fields('agahi_amlak_id');


        $crud->set_field_upload('img1','assets/uploads/img');
        $crud->set_field_upload('img2','assets/uploads/img');
        $crud->set_field_upload('img3','assets/uploads/img');
        $crud->set_field_upload('img4','assets/uploads/img');
        $crud->set_field_upload('img5','assets/uploads/img');
        $crud->set_field_upload('img6','assets/uploads/img');

        //$crud->set_field_upload('jobs_logo','assets/uploads/img');
        //$crud->set_field_upload('jobs_video','assets/uploads/videos');
        //$crud->field_type('username','date');

        $crud->callback_before_insert(array($this,'calculate'));
        $crud->callback_column('expire',array($this,'_change_expire_date'));
        $crud->callback_column('register_date',array($this,'_change_reg_date'));
        $crud->callback_column('update_date',array($this,'_change_reg_date'));
        $crud->unset_edit_fields('register_date');
        $crud->unset_add_fields('update_date');
        $crud->field_type('register_date', 'hidden', time());
        $crud->field_type('update_date', 'hidden', time());
        $crud->field_type('expire', 'hidden');
      
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
            )
                );

            $config_cate = array(
                'main_table' => 'zgr_agahi_amlak',
                'main_table_primary' => 'agahi_amlak_id',
                "url" => base_url().'site/panel/'. __CLASS__ . '/' . __FUNCTION__ .  '/'
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
                    'main_table' => 'zgr_agahi_amlak',
                    'main_table_primary' => 'agahi_amlak_id',
                    "url" => base_url().'site/panel/'. __CLASS__ . '/' . __FUNCTION__ .  '/',
                    //'ajax_loader' => base_url() . 'ajax-loader.gif', // path to ajax-loader image. It's an optional parameter
                    'segment_name' =>'get_cts' // It's an optional parameter. by default "get_items"
                    );
                    
                    $ostan = new gc_dependent_select($crud, $fields, $config_ostan);
                   
                    $js_ostan = $ostan->get_js();
                    
                    $output = $crud->render();
                    $output->output.= $js_ostan . $js_cate;
        $this->out_view($output);
    }

    
    function calculate($post_array) {
        $day =  time() + ($post_array['days'] * 86400);
        $post_array['expire'] = $day;
        return $post_array;
    }   

    public function _change_expire_date($value, $row)
    {
        if(time() > $value) {
            return '<span style="color:red;">'.$this->jdf->jdate('l, j F Y',(int)$value,'','GMT').'<span>'; 
        }else {
            return '<span style="color:green;">'.$this->jdf->jdate('l, j F Y',(int)$value,'','GMT').'<span>'; 
        }
        
    }

    public function _change_reg_date($value, $row)
    {
        return '<span style="color:blue;">'.$this->jdf->jdate('l, j F Y',(int)$value,'','GMT').'<span>'; 

        
    }
    function out_view($output = null) {
        $output->menu_top = $this->MY_Model->select('menu');
        $output->menu_middel = $this->MY_Model->select('secend_menu');
        $output->footer_menu = $this->MY_Model->select('footer_menu');
        $output->slider = $this->MY_Model->select('slider');
        $output->text = $this->MY_Model->select('text');
        $output->site = $this->MY_Model->select_single('site','1');
        $output->title = "بانك نيازمندي ها";
        $output->des = "مديريت و بررسي نيازمندي موجود";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('panel/index',$output);

    }



    


}