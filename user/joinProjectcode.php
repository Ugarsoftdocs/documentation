<?php

require_once('../model/Project.php');
$projects = [];

function getProjects(){
    global $projects;
    $project= new Project;
    $table1 = 'projects';
    $table2 = 'project_user';
    $query = [ "$table1.id", "$table1.name", "$table1.description", "$table1.project", "$table1.users_id as owner", "$table2.users_id"];
    $result = $project->query($query, " left join $table2 on $table2.projects_id = $table1.id ");
      if($result != null){
        while($row = $result->fetch_assoc()){
          $projects[] = $row;
        }
        
      }
    /*  $temp = [];
      $temp_project = $projects;
      foreach($projects as $key => $project){
          $users = [];
        foreach($temp_projects as $key1 => $project1){
            if($project['id'] == $project1['id']){
              $users[] =['id' => $project1['users_id']];
              
            }
        }
        
      }*/

}
getProjects();

require_once('../model/Role.php');

function getAdminRole(){
  $adminrole = new Role();
  
  $result = $adminrole->query(['id'], " where names = 'Admin'");
  if($result != null){
    $row = $result->fetch_assoc();
    return $row;
   
  }
}
$adminRole = getAdminRole();


?>


