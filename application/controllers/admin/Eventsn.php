<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Eventsn extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_events');
        $crud->where('zgr_events.state_id',1);

        $crud->set_subject('رويداد');

        $crud->columns('state_id','expire','update_date','register_date','events_type_id','events_title','accounts_id');
        $crud->display_as('events_id','شناسه');
        $crud->display_as('events_type_id','نوع رويداد');
        $crud->display_as('events_run_id',' نوع اجرا');
        $crud->display_as('accounts_id','كاربر');
        $crud->display_as('ostan_id','استان');
        $crud->display_as('city_id','شهرستان');
        $crud->display_as('events_title','عنوان رويداد');
        $crud->display_as('events_dec','توضيح');
        $crud->display_as('events_owner','سازمان دهنده');
        $crud->display_as('events_start','شروع رويداد');
        $crud->display_as('events_finish','پايان رويداد');
        $crud->display_as('events_capacity','ظرفيت');
        $crud->display_as('events_level_id','سطح رويداد');
        $crud->display_as('events_pro_dec','توضيح تخصصي رويداد');
        $crud->display_as('events_conditons','شرايط رويداد');
        $crud->display_as('img1','تصوير شماره 1');
        $crud->display_as('img2','تصوير شماره 2');
        $crud->display_as('img3','تصوير شماره 3');
        $crud->display_as('img4','تصوير شماره 4');
        $crud->display_as('img5','تصوير شماره 5');
        $crud->display_as('img6','تصوير شماره 6');
        $crud->display_as('events_logo','لوگو');
        $crud->display_as('events_poster','پوستر');
        $crud->display_as('events_clip','كليپ');
        $crud->display_as('events_link_site','لينك سايت');
        $crud->display_as('events_email','ايميل');
        $crud->display_as('events_instagram','اينستاگرام');
        $crud->display_as('events_address','آدرس برگزاري');
        $crud->display_as('map_latitude','طول جغرافيايي');
        $crud->display_as('map_longitude','عرض جغرافيايي');
        $crud->display_as('state_id','وضعيت رويداد');
        $crud->display_as('price_id','هزينه اشتراك');
        $crud->display_as('register_date','تاريخ ثبت');
        $crud->display_as('update_date','تاريخ آپديت');
        $crud->display_as('days','تعداد روزهاي نمايش');
        $crud->display_as('expire','تاريخ انقضا');
       

        $crud->set_relation('ostan_id','ostan','ostan_title');
        $crud->set_relation('city_id','city','city_title');
        $crud->set_relation('state_id','state','state_title');
        $crud->set_relation('events_type_id','events_type','events_type_title');
        $crud->set_relation('events_run_id','events_run','events_run_title');
        $crud->set_relation('accounts_id','accounts','account_mobile');
        $crud->set_relation('price_id','price','price_amount');

        

        $this->load->library('gc_dependent_select');

        $crud->unset_add_fields('jobs_id');
        $crud->unset_edit_fields('jobs_id');
 
       
        $crud->set_field_upload('events_logo','assets/uploads/img');
        $crud->set_field_upload('events_poster','assets/uploads/img');
        $crud->set_field_upload('events_clip','assets/uploads/videos');
        $crud->set_field_upload('img1','assets/uploads/img');
        $crud->set_field_upload('img2','assets/uploads/img');
        $crud->set_field_upload('img3','assets/uploads/img');
        $crud->set_field_upload('img4','assets/uploads/img');
        $crud->set_field_upload('img5','assets/uploads/img');
        $crud->set_field_upload('img6','assets/uploads/img');
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


        
      
        //$crud->required_fields('username');s

        $crud->unset_clone();
        $crud->unset_add();
        
        $crud->unset_texteditor(
            'events_title','events_dec','events_start','events_finish','events_capacity','events_link_site','events_email','events_instagram',
            'events_address','map_latitude','map_longitude','events_owner'
        );

        
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
                    'main_table' => 'zgr_events',
                    'main_table_primary' => 'events_id',
                    "url" => base_url().'admin/'. __CLASS__ . '/' . __FUNCTION__ .  '/',
                    //'ajax_loader' => base_url() . 'ajax-loader.gif', // path to ajax-loader image. It's an optional parameter
                    'segment_name' =>'get_cts' // It's an optional parameter. by default "get_items"
                    );
                    
                    $ostan = new gc_dependent_select($crud, $fields, $config_ostan);
                   
                    $js_ostan = $ostan->get_js();
                    
                    $output = $crud->render();
                    $output->output.= $js_ostan;
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
        
        $output->title = "رويداد ها";
        $output->des = "مديريت و بررسي رويداد هاي موجود";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }



    


}