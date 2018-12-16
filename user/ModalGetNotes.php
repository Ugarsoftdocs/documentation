<?php
require_once('../model/ProjectNote.php');

   
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['submitt'])){
        if(saveNotes()){
            $_GET['id'] = $_POST['id'];
            showNotes();
        }   
    } else {
        deleteNotes();
    }
}


function saveNotes(){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $message = $_POST['message'];
    $idd = $_POST['idd'];
    $projectnote = new ProjectNote;
    if($_POST['idd'] == 0){
    return $projectnote->insert(['title'=>"$name", 'description'=>"$message", 'project_id' => $id, 'users_id' => $_SESSION['userId']]);
    } else {
        return $projectnote->update(['title'=>"$name", 'description'=>"$message"], " where id = $idd");
    }
}   
   

function showNotes(){ 
  if(isset($_GET['id'])){
    $projectnote = new ProjectNote;
    $id = $_GET['id'];
    $result = $projectnote->query(['id', 'title', 'description'], " where project_id = $id and users_id =".$_SESSION['userId']);
    $notes = [];
    if($result != null){
        while($row = $result->fetch_assoc()){
            $notes[] = $row;
        } 
        echo json_encode($notes);  
    }
  }
}

showNotes();

function deleteNotes(){
    $id = $_POST['id'];
    $projectnote = new ProjectNote;
    return $projectnote->delete( " where id = $id");
}







?>