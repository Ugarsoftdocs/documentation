<?php

require_once('Model/validation.php');
//require_once('Model/roles.php');
require_once('Model/users.php');
//require_once('Model/projects.php'
$model = new users();
if(($name!="")&&($email!="")&&($number!="")&&($pwd!="")&&(!$nameErr)&&(!$emailErr)&&(!$numberErr)&&(!$pwdErr)){
$model->insert(['name' => "$name", 'email' => "$email", 'phone_number' => "$number", 'password' => "$pwd"]);
}

//header("refresh:2s; url = index.php");
//$model = new roles();
//$model->insert(['id' => 23, 'name'=>'client']);
//$model = new projects();
//$model->insert(['id' => 23, 'name'=>'client']); 
?>
