<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/documentation/model/projectUser.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/documentation/model/User.php');

 
$invites = [];
$rowers1 = [];
$rowers2 = [];
 $id = $project['id'];

function getInvite(){
    global $invites;
    global $rowers1;
    global $rowers2;
    global $id;


    $user= new User;
    $check = $user->query(['name','users_id'], " order by name ");
       if($check != null){
        while($rowe = $check->fetch_assoc()){

            $rowers1[] = $rowe;
             //var_dump($rowers1);
        }
      
    }
    
    $project= new ProjectUser;
    $table1 = 'project_user';
    $query = [];
    $result = $project->query($query, "where $table1.projects_id = $id");
    
      if($result != null){
        while($rower = $result->fetch_assoc()){
            
         //fetch the users_id for the given project_id and push into an array
            $rowers2[]= $rower['users_id'];
            //var_dump($rowers2);            
        }
      } 
         $invites = getDiff($rowers1,$rowers2);  
        //  var_dump($invites);
        return $invites;

}

getInvite();

    function getDiff($array1, $array2){
    
    foreach($array1 as $key => $value){
       // find the users_id in the array $rowers
        if(array_search($value['users_id'], $array2) !== false){
          //  var_dump($array2);
            unset($array1[$key]);
        }
    }
         return $array1;
   }

  
?>

