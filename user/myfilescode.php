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

require_once('../model/HistoryLog.php');
$historys = [];

function getHistorys(){
    global $historys;
    $history= new HistoryLog;
    $id = $_GET['id'];
    $table1 = 'history_logs';
    $table2 = 'users';
    $query = [ "$table1.id", "$table1.users_id", "$table1.projects_id", "$table1.created_at", "$table1.description", "$table2.name"];
    $result = $history->query($query, " left join $table2 on $table2.users_id = $table1.users_id where $table1.projects_id = $id order by created_at DESC LIMIT 5" ); 
    if($result != null){
        while($row = $result->fetch_assoc()){
          $historys[] = $row;
        }
        
    }
}

getHistorys();

?>
