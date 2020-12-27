<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agahi_Pay_OK extends MY_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->library('Jdf');
    }


    function index()
    {

        $crud = new grocery_CRUD();
        $crud->set_table('zgr_agahi_pay');
        $crud->set_subject('پرداختی');

		//$crud->where('agahi_pay.agahi_id',$this->uri->segment(4));

        $crud->columns('Status','pay_date','agahi_id','accounts_id','agahi_pay_id');
        $crud->display_as('agahi_pay_id','شناسه');
        $crud->display_as('accounts_id','کاربر');
        $crud->display_as('agahi_id','آگهی');
        $crud->display_as('authority','شناسه پرداخت');
        $crud->display_as('mobile','موبایل');
        $crud->display_as('amount','مبلغ پرداختی');
        $crud->display_as('pay_date','تاریخ پرداخت');
        $crud->display_as('Status',' وضعیت پرداخت');

        $crud->set_relation('accounts_id','accounts','{account_fn} {account_ln}');
        $crud->set_relation('agahi_id','agahi','agahi_title');


        $crud->callback_column('Status',array($this,'_callback_change_color'));

        $crud->unset_clone();
        $crud->unset_add();
        $crud->unset_edit();
        $crud->unset_print();
        $crud->unset_export();



        $output = $crud->render();

        $this->out_view($output);
    }
    function out_view($output = null) {
        $output->title = "پرداختی ها";
        $output->des = "مديريت و بررسي پرداختی ها";
        $output->timeStamp = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('admin/index',$output);

    }

    public function _callback_change_color($value){
        if ($value == "OK") {return "<span style='color: green;'>پرداخت موفق</a>";}
        else {return "<span style='color: red;'>پرداخت ناموفق</a>";}
    }

}
