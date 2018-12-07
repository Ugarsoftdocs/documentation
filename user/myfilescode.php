<?php
require_once('../model/Project.php');
require_once('../model/ProjectUser.php');


function getDetails(){
  $details = new Project();
  $id = $_POST['id'];
  $result = $details->query(['id', 'name', 'project', 'description'], " where id = $id");
  if($result != null){
    $row = $result->fetch_assoc();
    return $row;
  }
}
$getdetails = getDetails();

function joinProject(){
 if($_POST['form-type'] == '+ Join'){  
   $id = $_POST['id'];       
    $projectuserjoin = new ProjectUser;
    $projectuserjoin->insert(['projects_id' => "$id", 'users_id' => $_SESSION['userId']]);  
  }
}
joinProject();


?>
