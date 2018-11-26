<?php
require_once('BaseValidator.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/documentation/model/User.php');


class Mpv extends BaseValidator{

    public $errors;

    public function __construct(){
        $this->errors = [];
    }

    public function validatee($request){

        if($this->isEmpty($request['name'])) $this->errors['name'] = '*Name field is required';

        if($this->isEmpty($request['project'])) $this->errors['project'] = '*project field is required';

        if($this->isEmpty($request['message'])) $this->errors['message'] = '*description field is required';

        return $this->errors;

    }

}