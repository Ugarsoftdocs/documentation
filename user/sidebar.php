<?php
require_once('../model/Role.php');

function getRoleeAdmin(){
  $roleeadmin = new Role();
  
  $result = $roleeadmin->query(['id'], " where names = 'Admin'");
  if($result != null){
    $row = $result->fetch_assoc();
    return $row;
   
  }
}
$roleeAdmin = getRoleeAdmin();
?>
<?php require_once('UploadProfileImage.php')?>
<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <form action="" method="POST" id="uploadpp" enctype="multipart/form-data">
          <div class="centered"><img src="datatable/uploads/<?php displayProfileImage();?>" class="img-circle" width="100" height="100"><i style="position: relative; bottom: -30px; right: 5px;" class="fa fa-camera"></i></div>
          <input type="file" name = "uploadPix" value = "uploadPix" placeholder="Choose">
          <input type="submit" name = "submit" value = "submit" placeholder="Save">         
         </form>
          <h5 class="centered"><?php echo getAuthenticatedUser(); ?></h5>
          <li class="mt">
            <a href="index1.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li>
            <a href="contactform.php">
              <i class="fa fa-user"></i>
              <span>Profile</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-file"></i>
              <span>Projects</span>
            </a>
            <ul class="sub">
              <li><a href="Createproject.php">Create Project</a></li>
              <li><a href="Joinproject.php">All Projects</a></li>
              <li><a href="Myproject.php">My Projects</a></li>           
            </ul>
          </li>
          <?php if($_SESSION['role'] == $roleeAdmin["id"]){?>
          <li>
            <a href="Contactroles.php">
              <i class="fa fa-users"></i>
              <span>Roles</span>
            </a>
          </li>
          <li>
            <a href="">
              <i class="fa fa-gear"></i>
              <span>Setting</span>
            </a>
          </li>
          <li>
            <a href="../login/Log_out.php">
              <i class="fa fa-sign-out"></i>
              <span>Logout</span>
            </a>
          </li>
          <?php }else{?>
          <li>
            <a href="">
              <i class="fa fa-gear"></i>
              <span>Setting</span>
            </a>
          </li>
          <li>
            <a href="../login/Log_out.php">
              <i class="fa fa-sign-out"></i>
              <span>Logout</span>
            </a>
          </li>
          <?php }?>
        <ul>
        <!-- sidebar menu end-->
      </div>
    </aside>