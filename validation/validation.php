<?php
//initializing the variables
  $nameErr = $emailErr = $numberErr = $pwdErr = "";
  $name = $email = $number = $pwd = "";
  
 //passing the regex patterns to a variable 
  $w = '/^\+?(234703|234706|234803|234806|234810|234813|234814|234816|234903|234906)[0-9]{3}[0-9]{3}[0-9]{1}/';
  $v = '/^(0703|0706|0803|0806|0810|0813|0814|0816|0903|0906)[0-9]{3}[0-9]{3}[0-9]{1}/'; 
  $a = '/^\+?(234705|234805|234807|234811|234815|234905)[0-9]{3}[0-9]{3}[0-9]{1}/';
  $b = '/^(0705|0805|0807|0811|0815|0905)[0-9]{3}[0-9]{3}[0-9]{1}/';
  $c = '/^\+?(234701|234708|234802|234808|234812|234902|234907)[0-9]{3}[0-9]{3}[0-9]{1}/';
  $d = '/^(0701|0708|0802|0808|0812|0902|0907)[0-9]{3}[0-9]{3}[0-9]{1}/';
  $e = '/^\+?(234809|234817|234818|234908|234909)[0-9]{3}[0-9]{3}[0-9]{1}/';
  $f = '/^(0809|0817|0818|0908|0909)[0-9]{3}[0-9]{3}[0-9]{1}/';


  if ($_SERVER["REQUEST_METHOD"] == "POST") { 

//Name validation
      if (empty($_POST["name"])) {
        $nameErr = "*Name is required";
      } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
          $nameErr = "*Only letters are allowed"; 
        }
      }
  
      if (empty($_POST["email"])) {
        $emailErr = "*Email is required";
      } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "*Invalid email format"; 
        }
      }

<<<<<<< HEAD:Model/validation.php
      if (empty($_POST["number"])) {
        $numberErr = "*Number is required";
      } else {
        $number = test_input($_POST["number"]);
       // $number = intval($num)
      
        if(!preg_match("/^[0-9]*$/", $number)){
          $numberErr = "*Only digits are allowed";
        }
      }
         
      /*
      if((!preg_match($w,$number))||(!preg_match($v,$number))){
=======
    //number validation
if (empty($_POST["number"])) {
        $numberErr = "Number is required";
} else {
        $number = test_input($_POST["number"]);    
      if(!preg_match("/^(\+|[0-9])*$/", $number)){
          $numberErr = "Only digits allowed";
        }    
      elseif((!preg_match($w,$number))&&(!preg_match($v,$number))&&(!preg_match($a,$number))&&(!preg_match($b,$number))&&(!preg_match($c,$number))&&!(preg_match($d,$number))&&(!preg_match($e,$number))&&(!preg_match($f,$number))){
>>>>>>> 465623eeb772d347f8ef4c2859b35ee55c61a6a6:validation/validation.php
        $numberErr = "Enter valid number";
      }
}

<<<<<<< HEAD:Model/validation.php
      if((!preg_match($a,$number))||(!preg_match($b,$number))){
      $numberErr = "Enter valid number"; 
      }

      if((!preg_match($c,$number))||(!preg_match($d,$number))){
      $numberErr = "Enter valid number"; 
      }

      if((!preg_match($e,$number))||(!preg_match($f,$number))){
      $numberErr = "Enter valid number"; 
      }*/
      
 
  
=======
>>>>>>> 465623eeb772d347f8ef4c2859b35ee55c61a6a6:validation/validation.php
      if (empty($_POST["pwd"])) {
        $pwdErr = "*Password is required";
      } else {
         $pwd = test_input($_POST["pwd"]);
        }
      }


<<<<<<< HEAD:Model/validation.php
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
=======
>>>>>>> 465623eeb772d347f8ef4c2859b35ee55c61a6a6:validation/validation.php

