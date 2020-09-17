<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Accounts extends MY_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('Menu_Model');
        $this->load->model('MY_Model');
        $this->load->library('ion_auth');
        $this->load->library('Jdf');
        $this->load->library('user_agent');
        $this->load->helper('url');
        $this->load->helper('form');
    }

    function index()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_accounts');
        $crud->set_subject('كاربران');

        $crud->columns('account_reg_date','account_mobile','account_email','account_ln','account_fn','accounts_id');
        $crud->display_as('accounts_id','شناسه');
        $crud->display_as('account_fn','نام');
        $crud->display_as('account_ln','نام خانوادگي');
        $crud->display_as('account_pass','گذرواژه');
        $crud->display_as('account_email','ايميل');
        $crud->display_as('account_mobile','موبايل');
        $crud->display_as('account_tell','تلفن ثابت');
        $crud->display_as('account_codemeli','كد ملي');
        $crud->display_as('account_codeposti','كد پستي');
        $crud->display_as('account_address','آدرس');
        $crud->display_as('ostan_id','استان');
        $crud->display_as('city_id','شهرستان');
        $crud->display_as('register_date','تاريخ ثبت نام');
        $crud->display_as('update_date','تاريخ آخرين آپديت');
        $crud->display_as('state_id','وضعيت');
        $crud->display_as('account_active_code','كد فعال سازي');
        $crud->display_as('account_avatar','عكس پروفايل');
        $crud->display_as('account_sex','جنسيت');
        $crud->display_as('account_age','سن');
        $crud->display_as('account_about','درباره من');
     

        $crud->set_relation('ostan_id','ostan','ostan_title');
        $crud->set_relation('city_id','city','city_title');
        $crud->set_relation('state_id','state','state_title');
        

       
        $crud->change_field_type('account_pass','invisible');

        $this->load->library('gc_dependent_select');

        $crud->unset_clone();
        $crud->unset_add();

        $crud->unset_fields('account_active_code');

        $crud->set_field_upload('account_avatar','assets/uploads/files');
        //$crud->field_type('username','date');

        $crud->unset_edit_fields('register_date');
        $crud->unset_add_fields('update_date');
        $crud->field_type('register_date', 'hidden', time());
        $crud->field_type('update_date', 'hidden', time());

        //$crud->required_fields('username');

        $crud->unset_clone();
        $crud->unset_texteditor(
            'account_fn','account_ln','account_username','account_pass','account_email','account_mobile','account_tell','account_codemeli',
            'account_codeposti','account_address','account_active_code','account_map_latitude','account_map_longitude','account_sex','account_age',
            'account_about','account_level'
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

                $config = array(
                    'main_table' => 'zgr_accounts',
                    'main_table_primary' => 'accounts_id',
                    "url" => base_url().'admin/'. __CLASS__ . '/' . __FUNCTION__ .  '/'
                    //'ajax_loader' => base_url() . 'ajax-loader.gif', // path to ajax-loader image. It's an optional parameter
                    //'segment_name' =>'get_items' // It's an optional parameter. by default "get_items"
                    );
                    $categories = new gc_dependent_select($crud, $fields, $config);
                   
                    $js = $categories->get_js();
                    
                    $output = $crud->render();
                    $output->output.= $js;
        $this->out_view($output);
    }
    function out_view($output = null) {
        
        $output->title = "كاربران";
        $output->des = "مديريت و بررسي كاربران";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }

 


}