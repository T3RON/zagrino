<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Message_helper {


    public static function message($title,$text,$type,$url)
            {
            $CI =& get_instance();
            $array_msg = array('title'=>$title,'text'=>$text,'type'=>$type);
            $CI->session->set_flashdata('msg',$array_msg);
            redirect($url);
               
            }
 }


