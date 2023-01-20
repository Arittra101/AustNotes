<?php
class user {
   public $gmail;
   public $pass;


   function __construct($gmail,$pass) {
      $this->gmail = $gmail;
      $this->pass = $pass;
    } 
  
    function  mail_check (){
   
      if (filter_var($this->gmail, FILTER_VALIDATE_EMAIL)) {
       return $str="true";
      }
      else return $str="false";
    
     
     }
    function  pass_check(){
      if(strlen($this->pass)>3)  return $str="true";
      else return $str="false";
  }
}

 
// function set_name($gmail)
// {
//     $this->gmail = $gmail;
// }
// function set_name($gmail)
// {
//     $this->gmail = $gmail;
// }
?>