<?php
require_once('logIn.php');
session_destroy();
header('Location: ../index.php');
?>