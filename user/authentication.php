<?php
require_once('../model/User.php');
$user = new User();
$user->isAuthenticated();


      
function getAuthenticatedUser(){
  $profilename = new User();
  
  $result = $profilename->query(['name'], " where users_id =".$_SESSION['userId']);
  if($result != null){
    $row = $result->fetch_assoc();
    return $row['name'];
  }
}
?>