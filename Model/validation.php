<?php

  $nameErr = $emailErr = $numberErr = $pwdErr = "";
  $name = $email = $number = $pwd = "";


  if ($_SERVER["REQUEST_METHOD"] == "POST") { 
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
    
      if (empty($_POST["number"])) {
        $numberErr = "*Number is required";
      } else {
        $number = test_input($_POST["number"]);
      
        if(!preg_match("/^[0-9]*$/", $number)){
          $numberErr = "*Only digits are allowed";
        }
      } 
   
      if (empty($_POST["pwd"])) {
        $pwdErr = "*Password is required";
      } else {
        $pwd = test_input($_POST["pwd"]);
      }


  }


  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

