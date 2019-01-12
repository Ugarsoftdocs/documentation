    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content" style="height:930px !important; overflow: hidden;">
      <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="chat-room mt">
          <aside class="mid-side" style="width: 15%;">
            <div class="chat-room-head">
              <h3><?php echo $userProfile["name"]; ?>'s Profile</h3>
            </div>
            <div class="room-desk">
              <h4 class="pull-left"></h4>
      
              <div class="room-desk">
              <div class="room-box" style="width: 50%"><br><br><br><br><br><br><br><br><br><br><br></div>
              </div>
              <div class="invite-row">
              <h4 class="pull-left">Projects</h4>
              </div>
              <ul class="chat-available-user">
                <?php foreach($myprojects as $key => $myproject){?>
                <li>
                  <?php echo $myproject["project"]?>
                </li>
                <?php }?>
              </ul>
            </div>
          </aside>
          <aside class="right-side">
            <div class="user-head">
              <a href="#" class="chat-tools btn-theme"><i class="fa fa-cog"></i> </a>
              <a href="#" class="chat-tools btn-theme03"><i class="fa fa-arrow-left"></i> </a>          
            </div>
            <div class="row mt mb">
            <div class="col-lg-11">
            <div class="form-panel" style="border: 1px solid silver">
            <h4 class="title">Details</h4><br>
            <div id="message"></div>
            <form  role="form" action="" method="POST">

              <div class="form-group">
                <input type="name" name="name" class="form-control" id="contact-name" placeholder="Name" data-rule="minlen:1" data-msg="Please enter a name" value="<?php echo $userProfile["name"]; ?> " disabled>
                <span class="error" style="color: red;"><?php echo isset($errors['name']) ? $errors['name'] : '' ?> </span>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control" id="contact-email" placeholder="E-mail" data-rule="email" data-msg="Please enter an e-mail" value="<?php echo $userProfile["email"]; ?>" disabled>
                <span class="error" style="color: red;"><?php echo isset($errors['email']) ? $errors['email'] : '' ?> </span> 
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="phone" name="phone_number" class="form-control" id="phone" placeholder="Phone Number" data-rule="minlen:11" data-msg="Please enter a valid phone number" value="<?php echo $userProfile["phone_number"]?>" disabled>
                <span class="error" style="color: red;"><?php echo isset($errors['phone_number']) ? $errors['phone_number'] : '' ?> </span>  
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" name="facebook_link" class="form-control" id="link" placeholder="my Facebook URL" data-rule="minlen:1" data-msg="Please enter a password" value="<?php echo $userProfile["facebook_link"]?>" disabled>
                <span class="error" style="color: red;"><?php echo isset($errors['facebook_link']) ? $errors['facebook_link'] : '' ?> </span>  
              <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" name="twitter_link" class="form-control" id="link" placeholder="my Twitter URL" data-rule="minlen:1" data-msg="Please enter a password" value="<?php echo $userProfile["twitter_link"] ?>" disabled>
                <span class="error" style="color: red;"><?php echo isset($errors['twitter_link']) ? $errors['twitter_link'] : '' ?> </span>  
                <div class="validate"></div>
              </div>

            </form><br><br>
            </div>
            </div>
            </div>          
            </aside>
        </div>
      </section>
    </section>
