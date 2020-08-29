<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Eventslvl extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_events_level');
        $crud->set_subject('سطح برگزاري رويداد');

        $crud->columns('events_level_title');
        $crud->display_as('events_level_id','شناسه');
        $crud->display_as('events_level_title','سطح رويداد');
        


        $crud->unset_clone();
      
        

        $crud->unset_texteditor('events_level_title');
      
        $output = $crud->render();
        $this->out_view($output);
    }
    function out_view($output = null) {
        
        $output->title = "سطح برگزاري رويداد";
        $output->des = "مديريت و بررسي سطح برگزاري رويداد ";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }


}