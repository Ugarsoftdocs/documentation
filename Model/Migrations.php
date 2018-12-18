<?php
require_once('User.php');



$change = new User;


$change->addcolumn(['role'  => 'int NOT NULL'], " after users_id");  


?>