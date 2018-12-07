
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content" style="height:585px !important;">
      <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="chat-room mt">
          <aside class="mid-side">
            <div class="chat-room-head">
              <h3>createProject</h3>
              <form action="" class="pull-right position">
                <input type="text" placeholder="Search" class="form-control search-btn ">
              </form>
            </div>
            <div class="room-desk">
              <h4 class="pull-left"></h4>
              <h3><i class="fa fa-angle-right"></i> Project Form</h3>
        <!-- BASIC FORM ELELEMNTS -->

        <div class="row mt">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div id="message"></div>
            <form class="contact-form php-mail-form" role="form" action="" method="POST">
              
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="contact-text" placeholder="Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
                <span class="error" style="color: red;"><b><?php echo isset($errors['name']) ? $errors['name'] : '' ?><b></span>
                <div class="validate"></div>
              </div>
           
              <div class="form-group">
                <input type="text" name="project" class="form-control" id="contact-text" placeholder="Project" data-rule="text" data-msg="Please enter a valid text">
                <span class="error" style="color: red;"><?php echo isset($errors['project']) ? $errors['project'] : '' ?></span>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" id="contact-message" placeholder="Description" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
                <span class="error" style="color: red;"><?php echo isset($errors['message']) ? $errors['message'] : '' ?></span>
                <div class="validate"></div>
              </div>
              <div class="loading"></div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
              <input type="hidden" name="form-type" value="login">
              <div class="form-send">
                <button type="submit" class="btn btn-large btn-primary">+ Create myProject</button>
              </div>
          </form>
          </div>
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
    </section><br>
    <!-- /MAIN CONTENT -->
    <!--main content end-->