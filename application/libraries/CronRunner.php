<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CronRunner extends CI_Controller 
{
 private $CI;

 public function __construct()
 {
    $this->CI =& get_instance();
 }

 private function calculateNextRun($obj)
 {
    return (time() + $obj->interval_sec);
 }

 public function run()
 {
   if (time() > 1587197732) {
    echo("ok");
    } 
    
  }
}
?>