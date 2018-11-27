<?php
require_once('BaseValidator.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/documentation/model/User.php');


class LoginValidator extends BaseValidator{

    public $errors;

    public function __construct(){
        $this->errors = [];
    }

    public function validatee($request){

        if($this->isEmpty($request['inputEmail'])) $this->errors['inputEmail'] = '*E-mail field is required';

        if($this->isEmpty($request['inputPwd'])) $this->errors['inputPwd'] = '*Password field is required';

        return $this->errors;

    }

}

