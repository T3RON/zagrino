<?php

class Users_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }

    function register($phone_number) {
        $arraySave = array(
            'phone_number'=>$phone_number

        );
        $result = $this->db->insert("people",$arraySave);
        if ($result){
            return true;
        }else {
            return false;
        }
    }


}
