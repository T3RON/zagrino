<?php
include_once(APPPATH.'core/CI_Panel.php');

/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Jobs extends CI_Panel {
    function __construct()
    {
        parent::__construct();
        
    }

    function index()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_jobs');
        $crud->set_subject('شغل');

        $crud->columns('state_id','expire','update_date','register_date','jobs_title');
        $crud->display_as('jobs_id','شناسه');
        $crud->display_as('jobs_cate_id','گروه بندي');
        $crud->display_as('jobs_sub_cate_id',' زير گروه بندي');
        $crud->display_as('accounts_id','كاربر');
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
        $crud->display_as('jobs_map_latitude','طول جغرافيايي');
        $crud->display_as('jobs_map_longitude','عرض جغرافيايي');
        $crud->display_as('jobs_feature','توضيحات بيشتر');
        $crud->display_as('jobs_count_namayandegi','تعداد نمايندگي ها');
        $crud->display_as('jobs_count_namayandegi_in_city','تعداد نمايندگي شهر');
        $crud->display_as('jobs_sharayet','شرايط فروش');
        $crud->display_as('jobs_list_service','ليست خدمات و سرويس');
        $crud->display_as('jobs_lohe_taghdir','لوحه تقدير ها');
        $crud->display_as('jobs_mojavez','مجوز ها');
        $crud->display_as('jobs_video','ويدئو');
        $crud->display_as('register_date','تاريخ ثبت شغل');
        $crud->display_as('update_date','تاريخ آپديت');
        $crud->display_as('state_id','وضعيت');
        $crud->display_as('jobs_logo','لوگو');
        $crud->display_as('img1','تصوير شماره 1');
        $crud->display_as('img2','تصوير شماره 2');
        $crud->display_as('img3','تصوير شماره 3');
        $crud->display_as('img4','تصوير شماره 4');
        $crud->display_as('img5','تصوير شماره 5');
        $crud->display_as('img6','تصوير شماره 6');
        $crud->display_as('jobs_latitude','عرض جغرافیایی');
        $crud->display_as('jobs_longitude','طول جغرافیایی');
        $crud->display_as('jobs_shoar','شعار');
        $crud->display_as('category_id','گروه بندي');
        $crud->display_as('price_id','قيمت');
        $crud->display_as('jobs_service_id','سرويس ها');
        $crud->display_as('days','تعداد روزهاي نمايش');
        $crud->display_as('expire','تاريخ انقضا');

        $crud->where('zgr_jobs.accounts_id',$this->session->userdata('accounts_id'));
        $crud->unset_clone();
        $crud->unset_add();


        if($this->session->userdata('state_id') != 2) {
            $crud->unset_edit();
        }

			$crud->unset_add_fields('jobs_id');
			$crud->unset_edit_fields('jobs_id');

			$crud->unset_add_fields('jobs_latitude');
			$crud->unset_edit_fields('jobs_latitude');

			$crud->unset_add_fields('jobs_longitude');
			$crud->unset_edit_fields('jobs_longitude');

			$crud->unset_add_fields('days');
			$crud->unset_edit_fields('days');

			$crud->unset_add_fields('days');
			$crud->unset_edit_fields('days');

			$crud->unset_add_fields('price_id');
			$crud->unset_edit_fields('price_id');

			$crud->unset_add_fields('state_id');
			$crud->unset_edit_fields('state_id');

			$crud->field_type('jobs_latitude', 'hidden');
			$crud->field_type('jobs_longitude', 'hidden');
			$crud->field_type('days', 'hidden');
			$crud->field_type('price_id', 'hidden');
			$crud->field_type('state_id', 'hidden');



        $this->load->vars(array(
            'home_page' => FALSE
        ));

        $crud->set_relation('ostan_id','ostan','ostan_title');
        $crud->set_relation('city_id','city','city_title');
        $crud->set_relation('jobs_cate_id','jobs_cate','jobs_cate_title');
        $crud->set_relation('jobs_sub_cate_id','jobs_sub_cate','jobs_sub_cate_title');
        $crud->set_relation('accounts_id','accounts','account_mobile');
        $crud->set_relation_n_n('jobs_service_id', 'rel_jobs_service', 'jobs_service', 'jobs_id', 'jobs_service_id', 'jobs_service_title');
        $crud->set_relation('price_id','price','price_amount');
        $crud->set_relation('state_id','state','state_title');



        $this->load->library('gc_dependent_select');




		$crud->set_field_upload('jobs_logo','assets/uploads/img');
        $crud->set_field_upload('jobs_video','assets/uploads/videos');

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


        
      
        //$crud->required_fields('username');

      
        
        $crud->unset_texteditor(
            'jobs_title','jobs_shobe','jobs_mobile','jobs_tell','jobs_fax','jobs_email','jobs_code_posti','jobs_website',
            'jobs_instagram','jobs_telegram','jobs_whatsapp','jobs_facebook','jobs_tw','jobs_pinterest','jobs_youtube',
            'jobs_count_namayandegi','jobs_count_namayandegi_in_city','jobs_register_date',
            'jobs_update_date','jobs_shoar','jobs_price','expire','jobs_map_latitude','jobs_map_longitude'
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
                    'main_table' => 'zgr_jobs',
                    'main_table_primary' => 'jobs_id',
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
        $output->title = "بانك مشاغل";
        $output->des = "مديريت و بررسي مشاغل موجود";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('panel/index',$output);

    }



    


}
