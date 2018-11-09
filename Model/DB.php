<?php
require_once('config/dbconfig.php');
class DB{

    public function connect(){
        global $dbconfig;
        $servername = $dbconfig['host'];
        $username = $dbconfig['username'];
        $password = $dbconfig['password'];
        $dbname = $dbconfig['db'];
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        return $conn;
    }
}