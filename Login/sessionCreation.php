<?php
require_once('Model/DB.php');

global $conn;

if (isset($_POST['inputEmail']) && isset($_POST['inputPwd'])){
    $useremail = $_POST['inputEmail'];
    $userpwd = $_POST['inputPwd'];

    $useremail = mysqli_real_escape_string($conn, $useremail);
    $userpwd = mysqli_real_escape_string($conn, $userpwd); 

    if (!empty($useremail) && !empty($userpwd)){
        $sql = "SELECT id FROM users WHERE `email` = '$useremail' AND `password` = '$userpwd'";
        $result = $conn->query($sql);

        if($result){
            if($result->num_rows == 0){
                echo "Wrong Email or Password";
            } else if ($result->num_rows > 0){
                while($row = $result->fetch assoc()){

                    $_SESSION['userId'] = $row['id'];
                    header('Location:control.php');
                }
            }
        }    
    } else {
        echo "Please input your email and password";
    }
}
