
<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/documentation/model/imagefile.php');

function getUploadedfiles(){
$image = new Imagefile;
$result = $image->query(['created_by','image','date','size'], "order by id asc");
$output = array();
while($row = $result->fetch_assoc()){
    //var_dump($output);
 $output[] = $row;
//var_dump($output);

}
echo json_encode($output); ;
}
getUploadedfiles();


?>
