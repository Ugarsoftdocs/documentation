 <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content" style="height:100% !important;">
      <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="chat-room mt">
          <aside class="mid-side">
            <div class="chat-room-head">
              <h3>All Projects</h3>
              <form action="" class="pull-right position">
                <input type="text" placeholder="Search" class="form-control search-btn ">
              </form>
            </div>
            <div class="room-desk">
              <h4 class="pull-left"></h4>


        <div class="room-desk">
              <?php foreach($projects as $key => $project){?>
                <div class="room-box" >
                  <form action="" method="POST">
                    <h5 class="text-primary"><a href="chat_room.html"><?php echo $project["project"]?></a></h5>
                    <p><span class="text-muted">Admin : </span><?php echo $project["name"]?> | <span class="text-muted">Members :</span> 98 | <span class="text-muted">Last Activity :</span> 2 min ago</p>
                    <p><?php echo $project["description"]?></p>
                    <input type ="hidden" value ="<?php echo $project["id"]?>" name="id">
                     
                    <?php if($project['users_id'] == $_SESSION['userId']){?>
                      <a href= "myfiles.php?id=<?php echo $project['id']; ?>" class="pull-right btn btn-theme02" name="form-type" style ="margin-left: 6px;">
                       +View
                    </a><button type="button" data-toggle="modal" data-target="#myModal"  class="pull-right btn btn-theme02" style = "margin-left: 6px;">+ Invite</button>
                    <?php require_once('Notification/inviteUsers.php')?>
                    <?php require_once('Notification/inviteUsersmodal.php')?>
                    <button type="button" data-toggle="modal" data-target="#myModal1" class="pull-right btn btn-theme02" >+ Delete</button>
                    <?php require_once('Notification/DeleteUsers.php')?>
                    <?php }else{?>
                      <a href= "myfiles.php?id=<?php echo $project['id']; ?>" class="pull-right btn btn-theme02" name="form-type">
                       Join
                    </a>
                    <?php }?>
                  </form>

                </div>
              <?php }?>
     
            
        </div>

      </aside>
          <!--team members side-->          
          <aside class="right-side">
            <div class="user-head">
              <a href="#" class="chat-tools btn-theme"><i class="fa fa-cog"></i> </a>
              <a href="#" class="chat-tools btn-theme03"><i class="fa fa-key"></i> </a>
            </div>
            <div class="invite-row">
              <h4 class="pull-left">Team Members</h4>
              <a href="#" class="btn btn-theme04 pull-right">+ Invite</a>
            </div>
            <ul class="chat-available-user">
              <li>
                <a href="chat_room.html">
                  <img class="img-circle" src="img/friends/fr-02.jpg" width="32">
                  Paul Brown
                  <span class="text-muted">1h:02m</span>
                  </a>
              </li>
              <li>
                <a href="chat_room.html">
                  <img class="img-circle" src="img/friends/fr-05.jpg" width="32">
                  David Duncan
                  <span class="text-muted">1h:08m</span>
                  </a>
              </li>
              <li>
                <a href="chat_room.html">
                  <img class="img-circle" src="img/friends/fr-07.jpg" width="32">
                  Laura Smith
                  <span class="text-muted">1h:10m</span>
                  </a>
              </li>
              <li>
                <a href="chat_room.html">
                  <img class="img-circle" src="img/friends/fr-08.jpg" width="32">
                  Julia Schultz
                  <span class="text-muted">3h:00m</span>
                  </a>
              </li>
              <li>
                <a href="chat_room.html">
                  <img class="img-circle" src="img/friends/fr-01.jpg" width="32">
                  Frank Arias
                  <span class="text-muted">4h:22m</span>
                  </a>
              </li>
            </ul>
          </aside>
        </div>
        <!-- page end-->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->