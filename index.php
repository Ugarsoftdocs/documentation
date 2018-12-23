<?php
  require_once('validation/RegisterValidator.php');
  require_once('validation/LoginValidator.php');
  require_once('model/Role.php');
  
  
  $errors = [];
  $logerror = "";

  function getEditorRole(){
    $editorrole = new Role();
    
    $result = $editorrole->query(['id'], " where names = 'Editor'");
    if($result != null){
      $row = $result->fetch_assoc();
      return $row;
    }
  }
  $editorRole = getEditorRole();

  require_once('model/User.php');

   
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_POST['form-type'] == 'register'){
     $validate = new RegisterValidator;
     $errors = $validate->validate($_POST);
     if(count($errors) == 0){
       // submit form
       $user = new User();
       unset($_POST['form-type']);
       $_POST['role'] = 2;
       $result = $user->insert($_POST);
       
       if($result){
         $user->authenticateUser($_POST['email'], md5($_POST['password']));
        }
      }

    } else {
      $validatee = new LoginValidator;
      $errors = $validatee->validatee($_POST);
      if(count($errors) == 0){
        $user = new User();
        $useremail = $_POST['inputEmail'];
        $userpwd = md5($_POST['inputPwd']);
        $user->authenticateUser($useremail, $userpwd);
        $result = "";
        if($result == null){
          $logerror = "*Wrong E-mail or Password";
        }
      }       
    }
  }

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Landing Page - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">


    <!-- Custom styles for this template -->
    <link href="assets/css/landing-page.css" rel="stylesheet">
    <link href="assets/css/docproject.css" rel="stylesheet">
  </head>

  <body>


    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light fixed-top" style="background-color: #35455d !important;">
    <span class="error" style="color: white; font-size:15px; margin-left: 915px;"><?php echo $logerror?> </span>
    <span class="error" style="color: white; font-size:15px; margin-left: 819px;"><?php echo isset($errors['inputEmail']) ? $errors['inputEmail'] : '' ?> </span>
    <span class="error" style="color: white; font-size:15px; margin-left: 1025px;"><?php echo isset($errors['inputPwd']) ? $errors['inputPwd'] : '' ?> </span>  
     
      <div class="container-fluid">

        <div class="navbar-header">
          <h1 style="color:wheat;"><b>UgarSoft</b></h1>
        </div>
        <ul style="margin-left: -85px;" class="list-inline mb-2">
          <li class="list-inline-item">
            <a style="margin-left:20px; font-size: 1.4em;" href="#">Home</a>
          </li>
          <li class="list-inline-item">
            <a style="margin-left:55px; font-size: 1.4em;" href="#">About</a>
          </li>
          <li class="list-inline-item">
            <a style="margin-left:55px; font-size: 1.4em;" href="#">Contact</a>
          </li>
        </ul>


        <form class="form-inline" method="post" action="">
          <div class="form-group">
            <input type="email" style= "margin-right:20px;" class="form-control" id="email" placeholder="E-mail" name="inputEmail">
          </div>
          <input type="hidden" name="form-type" value="login">
          <div class="form-group">
            <input type="password" style= "margin-right:20px;" class="form-control" id="pwd" placeholder="Password" name="inputPwd">
          </div>
          <button type="submit" class="btn btn-default">Log In</button>
        </form>
      </div>      
    </nav>
     
    
    
    
    

    <!-- Masthead -->
    <header class="masthead">
      <div class="overlay"></div>   
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-8" style="text-align: center;">
            <img src="assets/img/document-icon-25.png">
            <h1 class="mb-5" style="color: white; text-align: right;">Document it now!</h1>
          </div>
          
          <div class="col-xl-4 mx-auto">
            <div class="embed" style="border-radius: 15px;">
            <form class="embed1" method="post" action=""> 
              <div class="form-group">
                <label class="text-black" for="name"></label>
                <input type="name" class="form-control" id="name" placeholder="Enter username" name="name"> 
                <span class="error" style="color: red;"><b><?php echo isset($errors['name']) ? $errors['name'] : '' ?><b></span>
              </div>
              <div class="form-group">
                <label class="text-black" for="email"><b></label>
                <input type="email" class="form-control" id="email" placeholder="Enter e-mail" name="email">
                <span class="error" style="color: red;"><?php echo isset($errors['email']) ? $errors['email'] : '' ?> </span>
              </div>
              <div class="form-group">
                <label class="text-black" for="number"></label>
                <input type="phone" class="form-control" id="phone" placeholder="Enter phone number" name="phone_number">
                <span class="error" style="color: red;"><?php echo isset($errors['phone_number']) ? $errors['phone_number'] : '' ?> </span>
              </div>
              <input type="hidden" name="form-type" value="register">
              <div class = "input-group" style = "padding-top: 25px;">
                <label class="text-black" for="pwd"></label>
                <input type="password" class="form-control" id="pwd1" placeholder="Enter password" name="password" data-toggle = "password">
                <div class = "input-group-append">
                <span class = "input-group-text"><i id = "eye" style = "padding-top: 5px;" onclick="myFunction()" class = "fa fa-eye-slash"></i></span>
                </div>
              </div>
              <span class="error" style="color: red;"><?php echo isset($errors['password']) ? $errors['password'] : '' ?> </span><br><br> 
              <button type="submit" class="btn btn-default"><b>Sign Up</b></button>
            </form><br><br>
            </div><br>
            <div class="container">
              <div class="row">
                <div class="col-xl-2 mr-0">
                  <button type="submit" id="shift" class="btn" style="background-color: #49649f; color: white";><span class="fab fa-facebook"></span> Log in with facebook</button>
                </div>
                <div class="col-xl-2 mx-auto">
                  <button type="submit" class="btn" style="background-color: #4fc1e9; color: white"><span class="fab fa-twitter"></span> Log in with Twitter</button>
                </div>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </header>
  
 
    <div class="container-fluid" style="padding-top: 0px;background-color:#f7f8fa; height:450px; width:100;"><br><br><br>
      <div class="row" >
          <div class="col-md-3" >
              <div id="listdiv">
                  <ul class="list-group" id="list">
                      <h2 id="secondline" class="list-group-item" style="font-weight: bold; margin-top:0px; font-family: 'Times New Roman', Times, serif; background-color:#242438;color:wheat; text-align:center">GAMING</h2>
                      <li class="list-group-item"><i class="fa fa-check"></i> Min Deposit - $2000</li>
                      <li class="list-group-item"><i class="fa fa-check"></i> Max Deposit - $19999</li>
                      <li class="list-group-item"><i class="fa fa-check"></i> 3% referral commision</li>
                      <li class="list-group-item"><i class="fa fa-check"></i> Capital Protection</li>
                      <li class="list-group-item"><i class="fa fa-check"></i> Instant witdrawal</li>
                      <h5 class="list-group-item" style="background-color:wheat; height:60px; text-align: center; margin-top:0px; color:#242438">JOIN US NOW</h5>
                  </ul>
             </div>
          </div>
          
          <div class="col-md-3">
              <div id="listdiv">
                  <ul class="list-group" id="list">
                       <h2 class="list-group-item" style="font-weight: bold; margin-top:0px; font-family: 'Times New Roman', Times, serif; background-color:#242438;color:wheat; text-align:center">WEBSITES</h2>
                      <li class="list-group-item"><i class="fa fa-check"></i> Min Deposit - $2000</li>
                      <li class="list-group-item"><i class="fa fa-check"></i> Max Deposit - $19999</li>
                      <li class="list-group-item"><i class="fa fa-check"></i> 3% referral commision</li>
                      <li class="list-group-item"><i class="fa fa-check"></i> Capital Protection</li>
                      <li class="list-group-item"><i class="fa fa-check"></i> Instant witdrawal</li>
                      <h5 class="list-group-item" style="background-color:wheat; height:60px; text-align: center; margin-top:0px; color:#242438">JOIN US NOW</h5>
                  </ul>
              </div>
          </div>
          <div class="col-md-3">
              <div id="listdiv">
                  <ul class="list-group" id="list">
                      <h2 class="list-group-item" style="font-weight: bold; margin-top:0px; font-family: 'Times New Roman', Times, serif; background-color:#242438;color:wheat; text-align:center">OGWUGO</h2>
                      <li class="list-group-item"><i class="fa fa-check"></i> Min Deposit - $50000</li>
                      <li class="list-group-item"><i class="fa fa-check"></i> Max Deposit - $100000</li>
                      <li class="list-group-item"><i class="fa fa-check"></i> 3% referral commision</li>
                      <li class="list-group-item"><i class="fa fa-check"></i> Capital Protection</li>
                      <li class="list-group-item"><i class="fa fa-check"></i> Instant witdrawal</li>
                      <h5 class="list-group-item" style="background-color:wheat; height:60px; margin-top:0px; text-align: center; color:#242438">JOIN US NOW</h5>
                  </ul>
              </div>
          </div>
          <div class="col-md-3">
              <div id="listdiv">
                  <ul class="list-group" id="list">
                     <h2 class="list-group-item" style="font-weight: bold; margin-top:0px; font-family: 'Times New Roman', Times, serif; background-color:#242438;color:wheat; text-align:center">APPS</h2>
                      <li class="list-group-item"><i class="fa fa-check"></i> Min Deposit - $20000</li>
                      <li class="list-group-item"><i class="fa fa-check"></i> Max Deposit - $100000</li>
                      <li class="list-group-item"><i class="fa fa-check"></i> Capital Protection</li>
                      <li class="list-group-item"><i class="fa fa-check"></i> Instant witdrawal</li>
                      <li class="list-group-item"><i class="fa fa-check"></i> Instant witdrawal</li>
                      <h5 class="list-group-item" style="background-color:wheat;height:60px;text-align: center; margin-top:0px; color:#242438">JOIN US NOW</h5>
                  </ul>
              </div> 
          </div>
      </div>
    </div>

    
    <div class="container-fluid" style="padding-top: 5.5%; padding-bottom: 3.5%; background-color:#f7f8fa;"><hr><br><br>
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-7">
            <img src="assets/img/ogwugo.jpg" style="border-radius: 15px;">
          </div>
          <div class="col-xl-5">
            <h2>About Us</h2>
            <p>We offer the best online customer-friendly services. With our diligent staffs and personnels who work tirelessly to match the everyday needs of our dear customers, a team of well-equipped programmers who create server-friendly and proper sites using clean codes. We engage in facets such as online gaming, food delivery, online stores and so much more. We promise to provide top-notch service to our esteemed customers, both present and future.</p>
          </div>
        </div>
      </div>
    </div>
     
    <footer class="footer" style="background-color: #343a40; height: 120px;">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">
              <li class="list-inline-item">
                <a href="#">About</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Contact</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
            </ul>
            <p class="text-muted small mb-4 mb-lg-0" id="white" style="color: white;"><b>UgarSoft &reg; All Rights Reserved | Copyright 2018 &copy;</b></p>
          </div>
          <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fab fa-facebook fa-2x fa-fw" style="color: #49649f";></i>
                </a>
              </li>
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fab fa-twitter-square fa-2x fa-fw" style="color: #4fc1e9";></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-instagram fa-2x fa-fw" style="color:#8a3ab9";></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>  
    </footer>
    

   <!-- Bootstrap core JavaScript -->
   <script src="vendor/jquery/jquery.min.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="assets/js/Password.js"></script>
    
  </body>


</html>
