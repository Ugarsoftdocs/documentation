<?php
require_once('../model/User.php');
require_once('../model/ProjectUser.php');

function getUserProfile(){
    $profileuser = new User();
    
    $result = $profileuser->query(['name', 'email', 'phone_number', 'facebook_link', 'twitter_link'], " where users_id =".$_GET['id']);
    if($result != null){
      $row = $result->fetch_assoc();
      return $row;
    }
  }
  $userProfile = getUserProfile();
  
  
  
  
  $myprojects = [];
  
  function getMyProjects(){
      global $myprojects;
      $myproject= new ProjectUser;
      $table1 = 'project_user';
      $table2 = 'projects';
      $query = [ "$table1.ps_id", "$table1.projects_id", "$table1.users_id", "$table2.project"];
      $result = $myproject->query($query, " left join $table2 on $table2.id = $table1.projects_id where $table1.users_id =".$_GET['id']); 
      if($result != null){
          while($row = $result->fetch_assoc()){ 
            $myprojects[] = $row;
          
          }
          
      }
  }
  
  getMyProjects();
  
  ?>