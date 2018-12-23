<?php 
require_once($_SERVER['DOCUMENT_ROOT'].'/documentation/model/ProfileImage.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/documentation/model/User.php');
   if(isset($_FILES['uploadPix'])){
      $errors= array();
      $idz = "";
      $file_name = $_FILES['uploadPix']['name'];
      $file_size =$_FILES['uploadPix']['size'];
      $file_tmp =$_FILES['uploadPix']['tmp_name'];
      $file_type=$_FILES['uploadPix']['type'];    
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
         move_uploaded_file($file_tmp,"datatable/uploads/".$file_name);
         $row = [];
         $user = new User;
         $result = $user->query(['name'], "where users_id = $session");
         if ($result){
             $row = $result->fetch_assoc();
             $row['name'];
         }          
        $image = new ProfileImage;
        $image->insert(['userid' => $session,'image' =>$file_name]);

      }else{
         print_r($errors);
      }
   }

?>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/documentation/model/ProfileImage.php');
function displayProfileImage(){
if(isset($_SESSION['userId'])){
  $session = $_SESSION['userId'];
}

$image = new ProfileImage;
$result = $image->query(['image'], "order by id desc limit 1");
while($row = $result->fetch_assoc()){

    $output = $row;

}
echo $output['image'];

}
displayProfileImage();
?>