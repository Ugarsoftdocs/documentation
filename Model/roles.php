<?php
require_once('Model.php');

class roles extends Model{
    public $table;
    public $columns;


    //you can instantiate an object with just a constructor when
    //its just and independent  function not inside a class, here the name of the
    //constructor becomes the name of object
    //you can 
    public function __construct(){
        parent::__construct();
        $this->table  = 'roles';
        $this->columns = [
            'id' => 'int auto_increment primary key',
            'name' => 'VARCHAR(30) NOT NULL'

        ];
    }

    public function create(){
        $this->createTable($this->columns, $this->table);
    }

    public function insert($data){
        $this->insertIntoTable($data, $this->table);
    }

    public function delete($where){
        $this->deleteRecord($where, $this->table);
    }
    
    public function update($update,$where){
        $this->updateRecord($update, $where, $this->table);
    }
    public function query($query_condition,$qc){
        $this->queryRecords($query_condition, $qc, $this->table);
    }
}