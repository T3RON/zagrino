<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class BankMashaghelRaigan extends MY_Controller {
    function __construct()
    {
        parent::__construct();
<<<<<<< HEAD
=======
        $this->load->model('Menu_Model');
>>>>>>> 23/11/98
    }

    function index()
    {
<<<<<<< HEAD
=======
        $output['menu_top'] = $this->Menu_Model->select('menu');
        $output['slider'] = $this->Menu_Model->select('slider');
        $output['text'] = $this->Menu_Model->select('text');

>>>>>>> 23/11/98
        $this->load->vars(array(
            'home_page' => TRUE
        ));
        $output['title'] = "كاربران";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
<<<<<<< HEAD
        $this->load->view('site/Niazmandi', $output);
=======
        $this->load->view('site/BankMashaghelRaigan', $output);
>>>>>>> 23/11/98
    }


}