<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/documentation/model/projectUser.php');
$names = [];

function getNamesDelete(){
    global $names;
    $name= new ProjectUser;
    $table1 = 'project_user';
    $table2 = 'users';
    $query = [ "$table1.projects_id", "$table1.users_id", "$table2.name" ];
    $result = $name->query($query, " left join $table2 on $table2.users_id = $table1.users_id");
      if($result != null){
        while($row = $result->fetch_assoc()){
            $names[] = $row;
        }
        
      }

}
getNamesDelete();
?>
<div id="myModal1" class="modal fade" role="dialog">
                            <div class="modal-dialog">    
                                  <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                       <h4 class="modal-title">Delete Users from your Project</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p id = "demoUsers"></p>
                                    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Names</th>               
            </tr>
        </thead>
        <?php foreach($names as $key => $name){?>
        <tbody>
            <tr>   
                <td><input type="checkbox"><span style="margin-left:10px"><?php echo $name["name"]?></span></td>
            </tr>    
        </tbody> 
        <?php }?>        
    </table>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>                             
                            </div>
                        </div>   

