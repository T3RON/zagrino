<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Eventstype extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('zgr_events_type');
        $crud->set_subject('نوع برگزاري رويداد');

        $crud->columns('events_type_title');
        $crud->display_as('events_type_id','شناسه');
        $crud->display_as('events_type_title','نوع رويداد');
        


        $crud->unset_clone();
      
        

        $crud->unset_texteditor('events_type_title');
      
        $output = $crud->render();
        $this->out_view($output);
    }
    function out_view($output = null) {
        
        $output->title = "نوع برگزاري رويداد";
        $output->des = "مديريت و بررسي نوع برگزاري رويداد ";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }


}