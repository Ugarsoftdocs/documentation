<?php
require_once('DB.php');

class Model extends DB{

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
            $values .= "'$value',";
        }

        $columns = trim($columns, ',');
        $values = trim($values, ',');
        $sql = "insert into $table($columns) values ($values)";
        // echo $sql;
        $result = $this->conn->query($sql);

        if($result){
            echo "successful";
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

    public function updateRecord(){

    }

    public function queryRecords($query_condition){

    }

}