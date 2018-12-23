<?php
require_once('ProfileImage.php');



$change = new ProfileImage;


$change->addcolumn(['role'  => 'int NOT NULL'], " after users_id");  


?>