
<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'].'/documentation/Model/User.php');    


    $uemail = $_POST['inputEmail'];
    $upass = $_POST['inputPwd'];
      
    $user = new User;
    $result =  $user->getUser([], " where email = '$uemail' and password='$upass'");

      if($result != null)
      {
          $_SESSION['inputEmail'] = $uemail;
          $_SESSION['inputPwd'] = $upass;
          header('location: user/index.html');

      }
      else {
        $logErr ="Wrong email or password";
    }

?>