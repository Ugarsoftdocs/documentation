
<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <div class="centered"><img src="img/ui-sam.jpg" class="img-circle" width="80"><i style="position: relative; bottom: -30px; right: 5px;" class="fa fa-camera"></i></div>
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
        <ul>
        <!-- sidebar menu end-->
      </div>
    </aside>