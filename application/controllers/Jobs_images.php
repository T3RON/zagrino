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


        $image_crud = new image_CRUD();
	
		$image_crud->set_primary_key_field('jobs_image_id');
		$image_crud->set_url_field('jobs_image_url');
		$image_crud->set_table('zgr_jobs_images')
		->set_relation_field('jobs_id')
		->set_ordering_field('jobs_image_id')
		->set_image_path('assets/uploads');
			
		$output = $image_crud->render();
        $this->out_view($output);
  
        
    }
    function out_view($output = null) {
        $output->title = "گالري تصاوير شغل";
        $output->des = "تصاوير مربوط به شغل خود را در اين بخش مديريت كنيد";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        
        $this->load->view('admin/index',$output);

    }


}