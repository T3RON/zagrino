<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Eventsrun extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_events_run');
        $crud->set_subject('نحوه برگزاري رويداد');

        $crud->columns('events_run_title');
        $crud->display_as('events_run_id','شناسه');
        $crud->display_as('events_run_title','نحوه برگزاري رويداد');
        


        $crud->unset_clone();
      
        

        $crud->unset_texteditor('events_run_title');
      
        $output = $crud->render();
        $this->out_view($output);
    }
    function out_view($output = null) {
        
        $output->title = "نحوه برگزاري رويداد";
        $output->des = "مديريت و بررسي نحوه برگزاري رويداد ";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }


}