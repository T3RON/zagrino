<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Site extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_site');
        $crud->set_subject('تنظيمات بالاي سايت');

        $crud->columns('site_des','site_title');
        $crud->display_as('site_title','عنوان سايت');
        $crud->display_as('site_des','توضيحات سايت');
        $crud->display_as('site_keywords','كلمات كليدي');
        $crud->display_as('site_logo','لوگو');
        $crud->display_as('site_icon','آيكون');
        $crud->display_as('site_btn_one_title','عنوان دكمه اول');
        $crud->display_as('site_btn_one_link','لينك دكمه اول');
        $crud->display_as('site_btn_one_ico','آيكون دكمه اول');
        $crud->display_as('site_btn_two_title','عنوان دكه دوم');
        $crud->display_as('site_btn_two_link','لينك دكمه دوم');
        $crud->display_as('site_btn_two_ico','آيكون دكمه دوم');
        $crud->display_as('site_ads_text','متن تبليغاتي');
        
        $crud->set_field_upload('site_logo','assets/uploads/img');
        $crud->set_field_upload('site_icon','assets/uploads/img');
        $crud->set_field_upload('site_btn_one_ico','assets/uploads/img');
        $crud->set_field_upload('site_btn_two_ico','assets/uploads/img');

        $crud->unset_clone();
        $crud->unset_add();
        $crud->unset_delete();
        

        $crud->unset_texteditor('site_ads_text','site_btn_one_title','site_btn_one_link','site_btn_two_title','site_btn_two_link','site_title','site_des','site_keywords');
      
        $output = $crud->render();
        $this->out_view($output);
    }
    function out_view($output = null) {
        
        $output->title = "تنظيمات بالاي سايت";
        $output->des = "مديريت و بررسي تنظيمات بالاي سايت ";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }


}