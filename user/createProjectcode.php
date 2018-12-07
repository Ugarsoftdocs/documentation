<?php

require_once('../model/Project.php');
require_once('../validation/Mpv.php');
require_once('../model/ProjectUser.php');
           
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $cool = [];
  $name = $_POST['name'];
  $project = $_POST['project'];
  $message = $_POST['message'];
  $valid = new Mpv;
  $errors = $valid->validatee(['name'=>"$name",'project'=>"$project", 'message'=>"$message"]);
  if(count($errors) == 0){
    $myproject = new Project;
    $myproject->insert(['name'=>"$name",'project'=>"$project", 'description'=>"$message"]);
    if ($myproject) {           
      $check = $myproject->query(['id'], " order by id desc limit 1");
      if($check != null){
        $row = $check->fetch_assoc();
        $cool = $row['id'];

        $projectuser = new ProjectUser;
        $projectuser->insert(['projects_id' => "$cool", 'users_id' => $_SESSION['userId']]);
        header("location:joinproject.php");
      }
    }      
  }
}
?>