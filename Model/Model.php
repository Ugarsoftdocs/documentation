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
        
        $result = $this->conn->query($sql);
        return $result;
    }
    
    public function deleteRecord($condition, $table){

        $sql = "delete from $table $condition";
        $result = $this->conn->query($sql);


        if($result){
            echo "successful";
        }else{
            echo $this->conn->error;

        }
        $this->conn->close();
    }

    public function updateRecord($data, $condition, $table){
       $col="";
       $val="";
       foreach($data as $key => $value){
           $col .= $key."="."'$value' ,";
        }
        $col =  trim($col, ',');
       $sql =  "UPDATE $table SET $col $condition";
       $result = $this->conn->query($sql);
       
       if($result){
        //echo "successful";
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

     $sql = "SELECT $col FROM $table $condition";
  
     $result = $this->conn->query($sql);
    
     return $result->num_rows > 0 ? $result : null;
    }

    public function getAllRecord($columne = [], $table){ 
        $col = '';
         foreach($columne as $key => $value){         
           $col .= $value. ', ';
           }
       if(strlen($col) == 0){
           $col = '*';
       }else{
           $col = trim($col, ', '); 
       }
   
        $sql = "SELECT $col FROM $table";
     
        $result = $this->conn->query($sql);
       
        return $result->num_rows > 0 ? $result : null;
       }

    public function alterTable($data, $condition, $table){
        $table_alter = "";

        foreach($data as $key => $value){
            $table_alter .= $key.' ' . $value . ',';
        }

        $table_alter = trim($table_alter, ',');

        $sql = "alter table $table add $table_alter $condition";

        $result = $this->conn->query($sql);

        if($result){
            echo "successful";
        }else{
            echo $this->conn->error;

        }
    }

    public function alterTableDrop($condition, $table){
        
        $sql = "alter table $table $condition";

        $result = $this->conn->query($sql);

        if($result){
            echo "successful";
        }else{
            echo $this->conn->error;

        }

    }

    public function tableDrop($table){
    
        $sql = "drop table $table";
    
        $result = $this->conn->query($sql);
    
        if($result){
            echo "successful";
        }else{
            echo $this->conn->error;
    
        }
        


    }
    public function uploadImage($columns,$values,$table){
        $key1 = "";
        $val1 = "";
        foreach($columns as $key=> $value){
            $key1 .= $key.',';
        }
        foreach($values as $key=> $value){
             $val1 .= $value.',';
         }
         $key1 = trim($key1, ',');
         $val1 = trim($val1, ',');

         $sql = "INSERT INTO $table ($key1) VALUES ($val1)";
        
         $result = $this->conn->query($sql);
         return $result;
    }
        


    
}




       

