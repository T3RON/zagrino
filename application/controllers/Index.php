<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Index extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->library('javascript');
        $this->load->library('javascript/jquery');
<<<<<<< HEAD
=======
        $this->load->model('Menu_Model');

>>>>>>> 23/11/98
    }

    function index()
    {
   
<<<<<<< HEAD
=======
        $data['menu_top'] = $this->Menu_Model->select('menu');
        $data['slider'] = $this->Menu_Model->select('slider');
        $data['text'] = $this->Menu_Model->select('text');
>>>>>>> 23/11/98

      
        // $output['title'] = "كاربران";
        // $output['des'] = "مديريت و بررسي كاربران";
        // $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
<<<<<<< HEAD
        $this->load->view('site/index');
=======
        $this->load->view('site/index',$data);
>>>>>>> 23/11/98
    }


}