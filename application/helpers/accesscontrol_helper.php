<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Accesscontrol_helper {


    public static function is_logged_in()
            {
            $CI =& get_instance();
            $is_logged_in = $CI->session->userdata('logged_in');
               if(!isset($is_logged_in) || $is_logged_in != true)
               {
                $CI->load->view('site/401');
//                echo 'شما اجازه دسترسي به اين صفحه را قبل از احراز هويت ندارين <a href="'.base_url('site/Login').'">ورود به سايت</a>';
//                die();
               }       
            }
 }
