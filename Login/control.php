<?php
require_once('sessionCreation.php');
require_once('sessionFunction.php');

if (loggedIn()){
    header('user/index.html');
} else include('index.php');
