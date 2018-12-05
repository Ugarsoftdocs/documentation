

<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/documentation/model/projectUser.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/documentation/model/User.php');

if(isset($_REQUEST['id'])){
    echo json_encode(getInvite());
}


$invites = [];
$rowers1 = [];
$rowers2 = [];
function getInvite(){
    global $invites;
    global $rowers1;
    global $rowers2;
    $user= new User;
    $check = $user->query(['name','users_id'], " order by name ");
       if($check != null){
        while($rowe = $check->fetch_assoc()){

            $rowers1[] = $rowe;
        }
      
    }
    
    $project= new project_user;
    $table1 = 'project_user';
    $query = [];
    $result = $project->query($query, "  where $table1.projects_id = 12");
      if($result != null){
        while($rower = $result->fetch_assoc()){
            
         //fetch the users_id for the given project_id and push into an array
            array_push($rowers2, $rower['users_id']);
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
            var_dump($array2);
            unset($array1[$key]);
        }
    }
         return $array1;
   }
?>

<div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">    
                                  <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                       <h4 class="modal-title">Invite Users to Your project</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p id = "demoUsers"></p>
                                        <div>
                                            <p><span id = "democ"></span></p>
                                        </div>

                                    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th >Name</th>               
            </tr>
        </thead>
        <?php foreach($invites as $key => $project){?>
        <tbody>
            <tr>
                <td><input type="checkbox"><span style="margin-left:10px"><?php echo $project['name'];?></span></td>
            </tr> 
        </tbody> 
        <?php }?>        
        <tfoot>
            <tr>
                <th ></th>              
            </tr>
        </tfoot>
    </table>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>                             
                            </div>
                        </div>   

