<?php
require_once('../model/Project.php');
require_once('../model/ProjectUser.php');


function getDetails(){
  if(!isset($_GET['id'])){
    header('location: Joinproject.php');
  }
  $details = new Project();
  $id = $_GET['id'];
  $result = $details->query(['id', 'name', 'project', 'description'], " where id = $id");
  if($result != null){
    $row = $result->fetch_assoc();
    return $row;
  }
}
$getdetails = getDetails();

function joinProject(){
 if(isset($_POST['form-type'])){ 
   $id = $_POST['id'];       
    $projectuserjoin = new ProjectUser;
    $projectuserjoin->insert(['projects_id' => "$id", 'users_id' => $_SESSION['userId']]);  
  }
}
joinProject();


?>
