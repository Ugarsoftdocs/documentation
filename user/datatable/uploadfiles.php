<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/documentation/model/imagefile.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/documentation/model/User.php');
function uploadfiles(){
   if(isset($_FILES['image'])){
      $errors= array();
      $idz = "";
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];    
      $exploaded = explode('.', $file_name);
      $ended = end($exploaded);
      $file_ext = strtolower($ended);

      if(isset($_POST['id'])){
          $idz = $_POST['id'];
      }
      if(isset($_SESSION['userId'])){
          $session = $_SESSION['userId'];
      }
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"uploads/".$file_name);
         $row = [];
         $user = new User;
         $result = $user->query(['name'], "where users_id = $session");
         if ($result){
             $row = $result->fetch_assoc();
             $row['name'];
         }          
        $image = new Imagefile;
        $check = $image->insert(['project_id' =>$idz,'users_id' => $session,'created_by' => $row['name'],'image' =>$file_name, 'status' => $file_ext, 'size'=>$file_size]);
           

      }else{
         print_r($errors);
      }
   }
}
uploadfiles();
?>

