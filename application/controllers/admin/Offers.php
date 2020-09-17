<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Offers extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_takhfif');
        $crud->set_subject('تخفیفات');

        $crud->columns('state_id','expire','update_date','register_date','takhfif_id','jobs_id','shop_id','takhfif_title','percent','accounts_id');
        $crud->display_as('accounts_id','کاربری');
        $crud->display_as('takhfif_id','شناسه');
        $crud->display_as('shop_id','فروشگاه');
        $crud->display_as('jobs_id','شغل');
        $crud->display_as('takhfif_title','عنوان تخفیف');
        $crud->display_as('ostan_id','استان');
        $crud->display_as('city_id','شهرستان');
        $crud->display_as('takhfif_type_id','نوع تخفیف');
        $crud->display_as('percent','درصد تخفیف');
        $crud->display_as('state_id','وضعیت');
        $crud->display_as('register_date','تاریخ ثبت');
        $crud->display_as('update_date','آخرین آپدیت');
        $crud->display_as('days','تعداد روزهاي نمايش');
        $crud->display_as('price_id','قيمت');
        $crud->display_as('expire','تاريخ انقضا');
        

        $crud->set_relation('ostan_id','ostan','ostan_title');
        $crud->set_relation('city_id','city','city_title');
        $crud->set_relation('state_id','state','state_title');
        $crud->set_relation('accounts_id','accounts','account_mobile');
        $crud->set_relation('price_id','price','price_amount');
        $crud->set_relation('shop_id','shop','shop_title');
        $crud->set_relation('jobs_id','jobs','jobs_title');
        $crud->set_relation('takhfif_type_id','takhfif_type','takhfif_type_title');

        
        $crud->add_action('افزودن تصوير', '', 'Jobs_images/index', 'fa-photo');

        $this->load->library('gc_dependent_select');

     


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
            'takhfif_title','percent','register_date','update_date'
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
                    'main_table' => 'zgr_takhfif',
                    'main_table_primary' => 'takhfif_id',
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
        
        $output->title = "لیست تخفیفات کاربران";
        $output->des = "مديريت و بررسي تخفیفات ارسالی موجود";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }



    


}