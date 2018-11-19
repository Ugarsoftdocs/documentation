<?php
require_once('sessionFunction.php');
session_destroy();
header('Location: '.$http_referer);
?>