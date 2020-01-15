<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Jobs_images extends MY_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->library('image_CRUD');
        $this->load->helper('url'); 
        $this->load->library('session');
    }

    function index()
    {

        // $crud = new grocery_CRUD();

        // $crud->set_table('zgr_jobs_images');
        // $crud->set_subject('تصاوير پنل شغلي');

        // $crud->columns('jobs_image_url','jobs_id');
        // $crud->display_as('jobs_id','پنل شغلي');
        // $crud->display_as('jobs_image_url','تصاوير');

        // //$crud->add_action('افزودن روز', '', 'Jalase_day/index/add', 'fa-plus');

        // //$crud->set_field_upload('news_title','assets/uploads/files');
        // //$crud->field_type('username','date');


        // $crud->required_fields('jobs_image_url');

        // $crud->unset_clone();
        // $crud->unset_add_fields('jobs_image_id');
        // $crud->unset_edit_fields('jobs_image_id');    


        // $output = $crud->render();

        // $this->out_view($output);





        $image_crud = new image_CRUD();
	
		$image_crud->set_primary_key_field('jobs_image_id');
		$image_crud->set_url_field('jobs_image_url');
		$image_crud->set_table('zgr_jobs_images')
		->set_relation_field('jobs_id')
		->set_ordering_field('jobs_image_id')
		->set_image_path('assets/uploads');


			
		$output = $image_crud->render();
        $this->out_view($output);
    // var_dump($output);
        // exit;
        
    }
    function out_view($output = null) {
        //$output->title = "اخبار باشگاه";
        
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        
        $this->load->view('admin/index',$output);

    }


}