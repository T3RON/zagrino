<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Ads extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_ads');
        $crud->set_subject('تبليغات');

        $crud->columns('state_id','expire','register_date','postion_id','ads_title');
        $crud->display_as('ads_id','شناسه ');
        $crud->display_as('ads_title','عنوان تبليغ ');
        $crud->display_as('postion_id','مكان قرار گيري');
        $crud->display_as('ads_img','تصوير');
        $crud->display_as('ads_link','لينك');
        $crud->display_as('price_id','قيمت');
        $crud->display_as('state_id','وضعيت');
        $crud->display_as('register_date','تاريخ ثبت');
        $crud->display_as('days','تعداد روزهاي نمايش');
        $crud->display_as('expire','تاريخ انقضا');


        


        $crud->unset_clone();
      
        

        $crud->unset_texteditor('expire','register_date','ads_link','ads_title');

        $crud->set_relation('postion_id','postion','postion_title');
        $crud->set_relation('state_id','state','state_title');
        $crud->set_relation('price_id','price','price_amount');

        $crud->set_field_upload('ads_img','assets/uploads/img');
        $crud->required_fields('ads_img','state_id','postion_id','days');

        $crud->callback_before_insert(array($this,'calculate'));
        $crud->callback_column('expire',array($this,'_change_expire_date'));
        $crud->callback_column('register_date',array($this,'_change_reg_date'));
        $crud->unset_edit_fields('register_date');
        $crud->field_type('register_date', 'hidden', time());
        $crud->field_type('expire', 'hidden');



        $output = $crud->render();
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
        
        $output->title = "ليست تبليغات ";
        $output->des = "مديريت و بررسي تبليغات  ";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }


}