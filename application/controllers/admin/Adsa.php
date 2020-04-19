<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Adsa extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $crud = new grocery_CRUD();

        $crud->where('zgr_ads.state_id',3);

        $crud->set_table('zgr_ads');
        $crud->set_subject('تبليغات');

        $crud->columns('state_id','expire','ads_reg','postion_id','ads_title');
        $crud->display_as('ads_id','شناسه ');
        $crud->display_as('ads_title','عنوان تبليغ ');
        $crud->display_as('postion_id','مكان قرار گيري');
        $crud->display_as('ads_img','تصوير');
        $crud->display_as('ads_link','لينك');
        $crud->display_as('price_id','قيمت');
        $crud->display_as('state_id','وضعيت');
        $crud->display_as('ads_reg','تاريخ ثبت');
        $crud->display_as('expire','تاريخ انقضا');
        


        $crud->unset_clone();
      
        

        $crud->unset_texteditor('ads_expire','ads_reg','ads_link','ads_title');

        $crud->set_relation('postion_id','postion','postion_title');
        $crud->set_relation('state_id','state','state_title');

        $crud->set_field_upload('ads_img','assets/uploads/img');
        $crud->required_fields('ads_img','state_id','postion_id');
        $crud->set_relation('price_id','price','price_amount');

        
        $crud->unset_edit_fields('ads_reg');
        $crud->field_type('ads_reg', 'hidden', time());

        $crud->callback_before_insert(array($this,'calculate'));
        $crud->callback_column('expire',array($this,'_change_expire_date'));
        $crud->callback_column('ads_reg',array($this,'_change_reg_date'));

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
        
        $output->title = "ليست تبليغات فعال";
        $output->des = "مديريت و بررسي تبليغات فعال ";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }


}