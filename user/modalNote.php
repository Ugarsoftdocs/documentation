<?php
require_once('../model/ProjectNote.php');


   
/**if($_SERVER['REQUEST_METHOD'] == 'POST'){/
    $id = $_POST['id'];
    $name = $_POST['name'];
    $message = $_POST['message'];
    $note = new ProjectNote();
    $note->insert(['title'=>"$name", 'description'=>"$message", 'projects_id' => "$id", 'users_id' => $_SESSION['userId']]);
} **/

   
   


?>
      <div class="modal fade" id="modals" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                     <h4 class="modal-title" style="text-align: center; color: white; text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue; font-size: 2em;"><b>Project Notes<b></h4>
                    </div>
                    <div class="modal-body">    
                        <div class="row">
                          <div class="col-sm-6">
                           <div style="border:1px solid silver; overflow-y: scroll; height: 493px !important;">
                            <div style="border:1px solid silver;">
                             <p style="text-align: left !important; padding-left:6px; padding-top: 3px;">Note
                             <button type="submit" class="btn btn-default" style="color: white; float: right; padding-top: 1px; padding-bottom: 1px; padding-left: 1.5px; padding-right: 1.5px; margin-right: 2px; background-color: silver;">Delete</button>
                             <button type="submit" class="btn btn-default" style="color: white; float: right; padding-top: 1px; padding-bottom: 1px; padding-left: 1.5px; padding-right: 1.5px; margin-right: 3px; background-color: silver;">View</button>
                             </p>
                             <textarea name="title" rows="3" cols="28"></textarea>
                            </div>
                           </div>
                          </div>
                          <div class="col-sm-6">
                          <form  role="form" action="" method="POST">
                            <div style="border:2px solid silver !important; height: 493px !important; overflow-y: scroll;">
                                <input type="text" name="name" class="form-control" id="contact-name">
                                <textarea name="message" rows="50" cols="28"></textarea>  
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="modal-footer">  
                     <button type="submit" class="btn btn-default" style="background-color: #7b7bc5; color: white;">Save</button>
                    </form>
                     <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: #7b7bc5; color: white;"><b>Close<b></button>
                    </div>
                </div>
            </div>
        </div>
    
      
    








