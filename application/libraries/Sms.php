<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sms {

    var $kavenegar_api;
    var $receptor;
    var $randomNum;
    var $template;

    public function __construct($verify_params)
    {
        

    }



    function verify($verify_params) {
        try {
            $url = 'http://api.kavenegar.com/v1/'.$verify_params['kavenegar_api'].'/verify/lookup.json?receptor=' . $verify_params['receptor'] . '&token='. $verify_params['randomNum'].'&template='. $verify_params['template'];	
            json_decode(file_get_contents($url), true);
        } catch (Exception $e) {
            //alert the user.
            var_dump($e->getMessage());
        }
    }

}