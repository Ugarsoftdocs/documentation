
<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/documentation/model/imagefile.php');

function getUploadedfiles(){
$output = [];
$image = new Imagefile;
$result = $image->query(['created_by','image','date','size'], "order by id asc");

while ($row = $result->fetch_assoc()){
      $output = $row;
    //var_dump($output);
 $output = json_encode($output);

}
    echo $output;
}
getUploadedfiles();


?>
