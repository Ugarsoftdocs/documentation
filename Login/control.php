<?php
require_once('Model/DB.php');
require_once('sessionFunction.php');

if (loggedIn()){
    header('user/index.html');
} else include('index.php');
