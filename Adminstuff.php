<?php

require_once('Model/validation.php');
//require_once('Model/roles.php');
require_once('Model/users.php');
//require_once('Model/projects.php');
 $model = new users();
  
  //To send detail in Sign Up form to database;

if(($name!="")&&($email!="")&&($number!="")&&($pwd!="")){
 $model->insert(['name' => "$name", 'email' => "$email", 'phone_number' => "$number", 'password' => "$pwd"]);
  
}

//$model = new roles();
//$model->insert(['id' => 23, 'name'=>'client']);
//$model = new projects();
//$model->insert(['id' => 23, 'name'=>'client']); 
?>
        

