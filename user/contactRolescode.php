<?php
require_once('../model/User.php');
require_once('../model/Role.php');

$roles = [];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['role'];
    $id = $_POST['id'];
    $updaterole = new User();
    $updaterole->update(['role'=>"$name"], " where users_id = $id");   

} 
function getUserRoles(){
    global $roles;  
    $role= new User;
    $result = $role->query(['name', 'users_id', 'role', 'email', 'phone_number'], "where users_id !=".$_SESSION['userId']); 
    if($result != null){
        while($row = $result->fetch_assoc()){ 
          $roles[] = $row;
        }
    }
}
getUserRoles();

function getRoleAdmin(){
    $roleadmin = new Role();
    
    $result = $roleadmin->query(['id'], " where names = 'Admin'");
    if($result != null){
      $row = $result->fetch_assoc();
      return $row;
     
    }
}
$roleAdmin = getRoleAdmin();


function getRoleEditor(){
    $roleeditor = new Role();
    
    $result = $roleeditor->query(['id'], " where names = 'Editor'");
    if($result != null){
      $row = $result->fetch_assoc();
      return $row;
    }
}
$roleEditor = getRoleEditor();

?>