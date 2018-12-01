<?php
require_once('../model/Project.php');

function getDetails(){
  $details = new Project();
  
  $result = $details->query(['name', 'project', 'description'], " order by id desc limit 1");
  if($result != null){
    $row = $result->fetch_assoc();
    return $row;
  }
}
$getdetails = getDetails();

?>
