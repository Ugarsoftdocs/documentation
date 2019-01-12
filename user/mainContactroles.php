
<!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
        <!--main content start-->
        <section id="main-content" style="height:930px !important; overflow: hidden;">
            <section class="wrapper site-min-height">
            <!-- page start-->
                <div class="chat-room mt">
                    <aside class="mid-side" style="width: 100%;">
                        <div class="chat-room-head">
                          <h3>User Roles</h3>
                        </div>
                        <div class="room-desk">
                          <h4 class="pull-left"></h4>
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                     <th>User</th>
                                     <th>Email</th>
                                     <th>Number</th>
                                     <th>Role</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($roles as $key => $role){?>
                                    <tr>
                                     <td><?php echo $role["name"]?></td>
                                     <td><?php echo $role["email"]?></td>
                                     <td><?php echo $role["phone_number"]?></td>
                                     <td>
                                        <form method="POST">
                                          <div class="form-group">
                                            <select class="form-control" id="sel1" name="role">
                                             <?php if($role['role'] == $roleAdmin["id"]){?>
                                             <option value ="<?php echo $roleAdmin["id"];?>">Admin</option>
                                             <option value ="<?php echo $roleEditor["id"];?>">Editor</option>
                                             <?php }else{?>
                                             <option value ="<?php echo $roleEditor["id"];?>">Editor</option>
                                             <option value ="<?php echo $roleAdmin["id"];?>">Admin</option>
                                             <?php }?>
                                            </select>
                                          </div> 
                                          <input type ="hidden" value ="<?php echo $role["users_id"]?>" name="id">   
                                     </td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td><button type="submit" name="submit" class="btn btn-default" style="background-color: #7b7bc5; color: white;">Save</button></td>
                                        </form>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </aside>
                </div>
            <!-- page end-->
            </section>
        <!-- /wrapper -->
        </section>
