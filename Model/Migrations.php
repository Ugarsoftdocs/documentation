<?php
require_once('Notification.php');



$change = new Notification;


$change->addcolumn(['desc' => 'VARCHAR(300)'], 'after description');                                       


