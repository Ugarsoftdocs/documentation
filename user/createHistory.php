<?php
require_once('../model/ProjectUser.php');

$profilename = new ProjectUser();
  
$profilename->query( * );

DELIMITER $$
CREATE TRIGGER createHistory
?>
