<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Car extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_agahi_car');
        $crud->set_subject('وسيله نقليه');

        $crud->columns('state_id','expire','update_date','register_date','agahi_car_title','accounts_id');
        $crud->display_as('agahi_car_id','شناسه');
        $crud->display_as('car_cate_id','گروه بندي');
        $crud->display_as('car_sub_cate_id',' زير گروه بندي');
        $crud->display_as('accounts_id','كاربر');
        $crud->display_as('ostan_id','استان');
        $crud->display_as('city_id','شهرستان');
        $crud->display_as('agahi_car_title','عنوان ملك');
        $crud->display_as('agahi_car_address','آدرس');
        $crud->display_as('agahi_car_full_des','توضيحات كامل');
        $crud->display_as('agahi_car_year','سال ساخت');
        $crud->display_as('agahi_car_karked','كاركرد');
        $crud->display_as('car_type_id','نوع وسيله');
        $crud->display_as('car_body_id','نوع بدنه');
        $crud->display_as('car_state_id','وضعيت وسيله');
        $crud->display_as('car_sokht_id','نوع سوخت');
        $crud->display_as('agahi_car_pelak','پلاك');
        $crud->display_as('agahi_car_color','رنگ');
        $crud->display_as('agahi_car_tell','شماره تماس');
        $crud->display_as('agahi_car_body_des','توضيحات بدنه');
        $crud->display_as('agahi_car_motor_des','توضيحات موتور');
        $crud->display_as('agahi_rule_check','قبول قوانين');
        $crud->display_as('map_latitude','طول جغرافيايي');
        $crud->display_as('map_longitude','عرض جغرافيايي');
        $crud->display_as('agahi_car_price','قيمت فروش');
        $crud->display_as('state_id','وضعيت آگهي');
        $crud->display_as('car_tag_id','برچسب');
        $crud->display_as('img1','تصوير شماره 1');
        $crud->display_as('img2','تصوير شماره 2');
        $crud->display_as('img3','تصوير شماره 3');
        $crud->display_as('img4','تصوير شماره 4');
        $crud->display_as('img5','تصوير شماره 5');
        $crud->display_as('img6','تصوير شماره 6');
        $crud->display_as('agahi_car_mobile','تلفن همراه');
        $crud->display_as('car_cond_tag_id','برچسب شرايط');
        $crud->display_as('register_date','تاريخ ثبت');
        $crud->display_as('update_date','تاريخ آپديت');
        $crud->display_as('days','تعداد روزهاي نمايش');
        $crud->display_as('expire','تاريخ انقضا');
      
     
        $crud->set_relation('ostan_id','ostan','ostan_title');
        $crud->set_relation('city_id','city','city_title');
        $crud->set_relation('state_id','state','state_title');
        $crud->set_relation('car_cate_id','car_cate','car_cate_title');
        $crud->set_relation('car_sub_cate_id','car_sub_cate','car_sub_cate_title');
        $crud->set_relation('accounts_id','accounts','account_mobile');
        $crud->set_relation('car_cond_tag_id','car_cond_tag','car_cond_tag_title');
        $crud->set_relation('car_tag_id','car_tag','car_tag_title');
        $crud->set_relation('car_type_id','car_type','car_type_title');
        $crud->set_relation('car_body_id','car_body','car_body_title');
        $crud->set_relation('car_state_id','car_state','car_state_title');
        $crud->set_relation('car_sokht_id','car_sokht','car_sokht_title');
        //$crud->set_relation_n_n('jobs_service_id', 'rel_jobs_service', 'jobs_service', 'jobs_id', 'jobs_service_id', 'jobs_service_title');

        $crud->set_field_upload('img1','assets/uploads/img');
        $crud->set_field_upload('img2','assets/uploads/img');
        $crud->set_field_upload('img3','assets/uploads/img');
        $crud->set_field_upload('img4','assets/uploads/img');
        $crud->set_field_upload('img5','assets/uploads/img');
        $crud->set_field_upload('img6','assets/uploads/img');
        //$crud->add_action('افزودن تصوير', '', 'Jobs_images/index', 'fa-photo');

        $this->load->library('gc_dependent_select');

        $crud->unset_add_fields('agahi_car_id');
        $crud->unset_edit_fields('agahi_car_id');
       
        $crud->callback_before_insert(array($this,'calculate'));
        $crud->callback_column('expire',array($this,'_change_expire_date'));
        $crud->callback_column('register_date',array($this,'_change_reg_date'));
        $crud->callback_column('update_date',array($this,'_change_reg_date'));
        $crud->unset_edit_fields('register_date');
        $crud->unset_add_fields('update_date');
        $crud->field_type('map_latitude', 'hidden');
        $crud->field_type('map_longitude', 'hidden');
        $crud->field_type('register_date', 'hidden', time());
        $crud->field_type('update_date', 'hidden', time());
        $crud->field_type('expire', 'hidden');

        
        //$crud->set_field_upload('jobs_logo','assets/uploads/img');
        //$crud->set_field_upload('jobs_video','assets/uploads/videos');
        //$crud->field_type('username','date');


      
        //$crud->required_fields('username');

        $crud->unset_clone();
        
        $crud->unset_texteditor(
            'agahi_car_title','agahi_car_price','agahi_car_tell','agahi_car_year','agahi_car_karked',
            'agahi_car_pelak','agahi_car_color','map_latitude',
            'map_longitude','agahi_car_mobile'
        );

  

        $fields_cate = array(

            // first field:
            'car_cate_id' => array( // first dropdown name
            'table_name' => 'car_cate', // table of country
            'title' => 'car_cate_title', // country title
            'relate' => null // the first dropdown hasn't a relation
            ),
            // second field
            'car_sub_cate_id' => array ( // second dropdown name
            'table_name' => 'car_sub_cate', // table of state
            'title' => 'car_sub_cate_title', // state title
            'id_field' => 'car_sub_cate_id', // table of state: primary key
            'relate' => 'car_cate_id', // table of state:
            'data-placeholder' => 'انتخاب زير گروه' //dropdown's data-placeholder:
            )
                );

            $config_cate = array(
                'main_table' => 'zgr_agahi_car',
                'main_table_primary' => 'agahi_car_id',
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

    function calculate($post_array) {
        $day =  time() + ($post_array['days'] * 86400);
        $post_array['expire'] = $day;
        return $post_array;
    }   

    public function _change_expire_date($value, $row)
    {
        if(time() > $value) {
            return '<span style="color:red;">'.$this->jdf->jdate('l, j F Y',$value,'','GMT').'<span>'; 
        }else {
            return '<span style="color:green;">'.$this->jdf->jdate('l, j F Y',$value,'','GMT').'<span>'; 
        }
        
    }

    public function _change_reg_date($value, $row)
    {
        return '<span style="color:blue;">'.$this->jdf->jdate('l, j F Y',$value,'','GMT').'<span>'; 

        
    }

    function out_view($output = null) {
        
        $output->title = "نيازمندي وسايل نقليه";
        $output->des = "مديريت و بررسي وسايل نقليه موجود";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }



    


}