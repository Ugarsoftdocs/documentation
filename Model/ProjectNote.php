<?php
require_once('Model.php');

class ProjectNote extends Model{
    public $table;
    public $columns;


    //you can instantiate an object with just a constructor when
    //its just and independent  function not inside a class, here the name of the
    //constructor becomes the name of object
    //you can 
    public function __construct(){
        parent::__construct();
        $this->table  = 'project_notes';
        $this->columns = [
            'id' => 'int auto_increment primary key',
            'users_id' => 'int NOT NULL',
            'project_id' => 'int NOT NULL',
            'title' => 'VARCHAR(150) NOT NULL',
            'description' => 'VARCHAR(300)',
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

    public function dropcolumn($condition){
        $this->alterTableDrop($condition, $this->table);
    }

    public function droptable(){
        $this->tableDrop($this->table);
    }

}
