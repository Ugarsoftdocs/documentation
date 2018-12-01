<?php
require_once('Model.php');

class User extends Model{
    public $table;
    public $columns;

    //you can instantiate an object with just a constructor when
    //its just an independent  function not inside a class, here the name of the
    //constructor becomes the name of object
     
    public function __construct(){
        parent::__construct();
        $this->table  = 'users';
        $this->columns = [
            'users_id' => 'int auto_increment primary key',
            'name'  => 'VARCHAR(30) NOT NULL',
            'email' => 'varchar(50) unique',
            'phone_number' => 'varchar(255)',
            'password' => 'varchar(200)',
            'facebook_link' => 'varchar(200)',
            'twitter_link' => 'varchar(200)',
            'created_at' =>'timestamp(6)',
            'updated_at' =>'timestamp(6)' 
        ];
    }

    public function create(){
        $this->createTable($this->columns, $this->table);
    }

    public function insert($data){
        return $this->insertIntoTable($data, $this->table);
    }

    public function delete($condition){
        return $this->deleteRecord($condition, $this->table);
    }
    
    public function update($data, $condition){
        return $this->updateRecord($data, $condition, $this->table);
    }

    public function query($columns, $condition){
        return $this->getSingleRecord($columns, $condition, $this->table);
    }

    public function addcolumn($data, $condition){
        $this->alterTable($data, $condition, $this->table);
    }

    public function dropcolumn($data){
        $this->alterTableDrop($data, $this->table);
    }

    public function droptable(){
        $this->tableDrop($this->table);
    }

    public function authenticateUser($email, $password, $location = 'user/index1.php'){
        $result = $this->query(['users_id'], " where email = '$email' AND password = '$password'");
        
        if($result != null){
           $row = $result->fetch_assoc();
           
            $_SESSION['userId'] = $row['users_id'];
          header("Location: $location");
        }
    }

    public function isAuthenticated(){
        
        if(!isset($_SESSION['userId'])) {
            header('Location: ../index.php');
        }
    }


}