<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Accesscontrol_helper {


    public static function is_logged_in() {
            $CI =& get_instance();
            $is_logged_in = $CI->session->userdata('logged_in');
               if(!isset($is_logged_in) || $is_logged_in != true)
               {
               //  $CI->load->view('site/401');
               //  echo "شما اجازه دسترسی ندارید ابتدا در سامانه عضو و یا وارد شود سپس اقدام نمایید";
               //  echo "<a href=".base_url('site/Login').">بازگشت به سایت</a>";
               //  die();
               self::call_view();
             
            
               }       
            }



            function call_view(){
               $CI = get_instance(); //creating instance of CI
               redirect('site/Login');
           }
 }
