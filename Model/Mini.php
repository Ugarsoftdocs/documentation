<?php
require_once('Model.php');

class Mini extends Model{
    public $table;
    public $columns;

    public function __construct(){
        parent::__construct();
        $this->table  = 'minies';
        $this->columns = [
            'id' => 'int auto_increment primary key',
            'email' => 'varchar(50) unique'
        ];
    }

    public function create(){
        $this->createTable($this->columns, $this->table);
    }

    public function insert($data){
        $this->insertIntoTable($data, $this->table);
    }



}