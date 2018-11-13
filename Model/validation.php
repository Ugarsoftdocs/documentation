
        <?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $number =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
  
  if (empty($_POST["number"])) {
    $numberErr = "number is required";
  } 
  else {
    $number = test_input($_POST["number"]);

  if(!preg_match("/^[0-9]*$/", $number)){
    $numberErr = "Only digits allowed";
  } 
  else if((!length($number)==11)||(!length($number)==14)){
    $numberErr = "Enter valid number";
  }
  
  $w = /^\+?(234703|234706|234803|234806|234810|234813|234814|234816|234903|234906)[0-9]{3}[0-9]{3}[0-9]{1}$/;
  $v = /^(0703|0706|0803|0806|0810|0813|0814|0816|0903|0906)[0-9]{3}[0-9]{3}[0-9]{1}$/;
  else if(!(($number.match($w)||($number.match($v))){
    $numberErr = "Enter valid number";
  }
  $a = /^\+?(234705|234805|234807|234811|234815|234905)[0-9]{3}[0-9]{3}[0-9]{1}$/;
  $b = /^(0705|0805|0807|0811|0815|0905)[0-9]{3}[0-9]{3}[0-9]{1}$/;
  else if(!(($number.match($a)||($number.match($b))){
  $numberErr = "Enter valid number"; 
  }
  $c = /^\+?(234701|234708|234802|234808|234812|234902|234907)[0-9]{3}[0-9]{3}[0-9]{1}$/;
  $d = /^(0701|0708|0802|0808|0812|0902|0907)[0-9]{3}[0-9]{3}[0-9]{1}$/;
  else if(!(($number.match($c)||($number.match($d))){
  $numberErr = "Enter valid number"; 
  }
  $e = /^\+?(234809|234817|234818|234908|234909)[0-9]{3}[0-9]{3}[0-9]{1}$/;
  $f = /^(0809|0817|0818|0908|0909)[0-9]{3}[0-9]{3}[0-9]{1}$/;
  else if(!(($number.match($e)||($number.match($f))){
  $numberErr = "Enter valid number"; 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
