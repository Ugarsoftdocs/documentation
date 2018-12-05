<?php
require_once('Model.php');

class ProjectUser extends Model{
    public $table;
    public $columns;


    //you can instantiate an object with just a constructor when
    //its just an independent  function not inside a class, here the name of the
    //constructor becomes the name of object
     
    public function __construct(){
        parent::__construct();
        $this->table  = 'project_user';
        $this->columns = [
            'ps_id'=> 'int auto_increment primary key',
            'projects_id' => 'int NOT NULL',
            'users_id' => 'int NOT NULL',
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