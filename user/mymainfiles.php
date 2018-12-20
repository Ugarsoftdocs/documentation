 <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
        <!--main content start-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <section id="main-content" style="height:930px !important; overflow: hidden;">
      <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="chat-room mt">
          <aside class="mid-side" style="width: 15%;">
            <div class="chat-room-head">
              <h3><?php echo $getdetails["project"]?></h3>
            </div>
            <div class="room-desk">
              <h4 class="pull-left"></h4>
      
        <div class="room-desk">
                <div class="room-box" >
                  <form action="" method="">
                    <p><span class="text-muted">Admin : </span><?php echo $getdetails["name"]?></p>
                    <p><?php echo $getdetails["description"]?></p>
                    <input type ="hidden" value ="<?php echo $getdetails["id"]?>" name="id">     
                  </form>
                </div>
        </div>
                <div class="invite-row">
              <h4 class="pull-left">Recent Activities</h4>
            </div>
            <ul class="chat-available-user">
            <?php foreach($historys as $key => $history){?>
            <?php $time = $history["created_at"]?>
              <li>
                <a href="contactRemake.php?id=<?php echo $history["users_id"]?>">
                  <img class="img-circle" src="img/friends/fr-02.jpg" width="32">
                  <?php echo $history["name"]?>
                  <?php echo $history["description"]?>
                  <span class="text-muted">at <?php echo date("h:ia d-m-Y", strtotime($time))?></span>
                  </a>
              </li>
              <?php }?>
              
            </ul>
            
        
        </div>
        </aside>

      
          <!--team members side-->          
          <aside class="right-side">
            <div class="user-head">
              <a href="#" class="chat-tools btn-theme"><i class="fa fa-cog"></i> </a>
              <a href="#" class="chat-tools btn-theme03"><i class="fa fa-key"></i> </a>
              <a href="#" class="chat-tools btn-theme03"><i class="fa fa-file"></i> </a>        
              <a href="#" class="chat-tools btn-theme03"><i class="fa fa-user-plus"></i> </a>           
            </div>
        <div class="row mt mb">
          <div class="col-lg-12">
            <div class = "container">
            <h3><i class="fa fa-angle-right"></i> Files</h3>
            </div>
            <br>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="dmbox" style="box-shadow: 10px 10px 5px grey; background-color: #ecf0f1;">
                <div class="service-icon" >
                  <span></span>
                <a><i class="dm-icon fa fa-file fa-3x"  data-target="#myModal"></i></a>
                </div>
                <h4>Project Documents</h4>
                </div>
            </div>
            <!-- end dmbox -->
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="dmbox" style="box-shadow: 10px 10px 5px grey; background-color: #ecf0f1;">    
                <div class="service-icon">
                  <span></span>
                  <a><i class="dm-icon fa fa-image fa-3x" data-toggle="modal" data-target="#myModal"></i></a>
                <?php require_once('datatable/modaltable.php')?> 
                </div>
                <h4>Project Images</h4>
                </div>
            </div>
            <!-- end dmbox -->
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="dmbox" style="box-shadow: 10px 10px 5px grey; background-color: #ecf0f1;">
                <div class="service-icon">
                  <span></span>
                  <a><i class="dm-icon fa fa-file fa-3x"  data-target="#myModal"></i></a>

                </div>
                <h4>Project Videos</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12" style="margin-top:40px">
              <div class="dmbox" style="box-shadow: 10px 10px 5px grey; background-color: #ecf0f1;">
                <div class="service-icon">
                  <span style="float: right; margin-left: 0px; font-size: 1.5em;" class="badge" id="showcase"></span>
                  <a><i style="margin-right: -10.5px;" class="dm-icon fa fa-file fa-3x" id="button" data-toggle="modal" data-target="#modals"></i></a>
                <?php require_once('../modalNote.php')?>
                </div>
                <h4>Project Notes</h4>
                </div>  
            </div>
            <!-- end dmbox -->
            <div class="col-lg-4 col-md-4 col-sm-12" style="margin-top:40px">
              <div class="dmbox" style="box-shadow: 10px 10px 5px grey; background-color: #ecf0f1;">
                <div class="service-icon">
                  <span></span>
                  <a class="" href="faq.html#"><i class="dm-icon fa fa-link fa-3x"></i></a>
                </div>
                <h4>Project Links</h4>
                </div>
            </div>
            <!-- end dmbox -->
            <div class="col-lg-4 col-md-4 col-sm-12" style="margin-top:40px">
              <div class="dmbox" style="box-shadow: 10px 10px 5px grey; background-color: #ecf0f1;">
                <div class="service-icon">
                  <span></span>
                  <a class="" href="faq.html#"><i class="dm-icon fa fa-pencil fa-3x"></i></a>
                </div>
                <h4>Recommendations</h4>
                </div>
            </div>
          </div>
        </div>
      </div>          
          </aside>
        </div>
        <!-- page end-->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    
    <script src="../assets/js/FetchNotes.js"></script>  
    