<?php
require_once('BaseValidator.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/documentation/model/User.php');


class RegisterValidator extends BaseValidator{

    public $errors;

    public function __construct(){
        $this->errors = [];
    }

    public function validate($request){
        
        if($this->emailAlreadyExists($request['email'])) $this->errors['email'] = '*Email has been taken';
        if(!$this->isEmailValid($request['email'])) $this->errors['email'] = '*Email is not valid';
        if($this->isEmpty($request['email'])) $this->errors['email'] = '*Email field is required';

        if(!$this->isNameValid($request['name'])) $this->errors['name'] = '*Name is not valid';
        if($this->isEmpty($request['name'])) $this->errors['name'] = '*Name field is required';
        
        if($this->phoneAlreadyExists($request['phone_number'])) $this->errors['phone_number'] = '*Phone number has been taken';
        if(!$this->isPhoneNumberValid($request['phone_number'])) $this->errors['phone_number'] = '*Phone number is not valid';
        if($this->isEmpty($request['phone_number'])) $this->errors['phone_number'] = '*Phone number field is required';
       
        if($this->isEmpty($request['password'])) $this->errors['password'] = '*Password field is required';

        
        return $this->errors;
        
    }

    public function emailAlreadyExists($email){
        $user = new User;
        $result = $user->query([], " where email = '$email'");
        return $result != null;
    }

    public function phoneAlreadyExists($phone_number){
        $user = new User;
        $result = $user->query([], " where phone_number = '$phone_number'");
        return $result != null;
    }
    
}