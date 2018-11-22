<?php
require_once('Database.php');

class Model extends Database{

    public $conn;

    public function __construct(){
        $this->conn = $this->connect();
    }

    /**
     * a function that creates tables in database
     * @param $column, $table
     * @return boolean
     */
    public function createTable($columns, $table){
        $query_builder = "";
        foreach($columns as $key => $value){
            $query_builder .= $key.' ' . $value . ',';
        }
        $query_builder = trim($query_builder, ',');
        $sql = "create table $table(
            $query_builder
        )";

        $result = $this->conn->query($sql);
        $this->conn->close();
        if($result){
            echo "successful";
        }else{
            echo $this->conn->error;

        }
    }

    public function insertIntoTable($data, $table){
        $columns = "";
        $values = "";

        foreach($data as $key => $value){
            $columns .= $key. ',';
        }

        foreach($data as $key => $value){
            if($key == 'password'){
                $hashed = md5($value);
                $values .= "'$hashed',";
                continue;
            }
            $values .= "'$value',";
        }

        $columns = trim($columns, ',');
        $values = trim($values, ',');
        $sql = "insert into $table($columns) values ($values)";
        //echo $sql;
        $result = $this->conn->query($sql);

        if($result){
            echo '<script language = "javascript">';
            echo 'alert("Registration Successful!");';
            echo 'window.location.href = "user/index.html";';
            echo '</script>';
        }else{
            echo $this->conn->error;

        }
        $this->conn->close();
    }
    public function deleteRecord($where, $table){
        $col="";
        foreach($where as $key => $value){
        $col .= $key."="."'$value'";
        }

        $sql = "delete from $table where $col";
        $result = $this->conn->query($sql);


        if($result){
            echo "successful";
        }else{
            echo $this->conn->error;

        }
        $this->conn->close();
    }

    public function updateRecord($update,$where,$table){
       $col="";
       $val="";
       foreach($update as $key => $value){
           $col .= $key."="."'$value'";
       }
       foreach($where as $key => $value){
        $val .= $key."="."'$value'";
       }
       $sql =  "UPDATE $table SET $col WHERE $val";
       $result = $this->conn->query($sql);

       if($result){
        echo "successful";
       }else{
        echo $this->conn->error;

       }
       $this->conn->close();
    }   
    

    public function getSingleRecord($columns = [], $condition, $table){ 
     $col = '';
      foreach($columns as $key => $value){         
        $col .= $value. ', ';
        }
    if(strlen($col) == 0){
        $col = '*';
    }else{
        $col = trim($col, ', '); 
    }

     $sql = "SELECT $col FROM $table $condition ";
     var_dump($sql);
     $result = $this->conn->query($sql);
    
     return $result->num_rows > 0 ? $result : null;
    }
    
}




       

