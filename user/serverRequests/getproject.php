<?php

require_once('../../model/projectUser.php');

$projects = [];

function getProject(){
$project = new project_user;
$query = ['projects_id'];
$result = $project->query($query, "order by projects_id ");

if($result != null){
    $projects [] = $result->fetch_assoc();
    $jsonProject =json_encode($projects);


}
}
getProject();
?>
