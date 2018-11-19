<?php
// die(__DIR__);
require_once('BaseValidator.php');
require_once('Model/User.php');

class RegisterValidator extends BaseValidator{

    public $errors;

    public function __construct(){
        $this->errors = [];
    }

    public function validate($request){
        
        if($this->emailAlreadyExists($request['email'])) $this->errors['email'] = 'Email has been taken';
        if(!$this->isEmailValid($request['email'])) $this->errors['email'] = 'Email is not valid';
        if($this->isEmpty($request['email'])) $this->errors['email'] = 'Email field is required';

        if(!$this->isNameValid($request['name'])) $this->errors['name'] = 'name is not valid';
        if($this->isEmpty($request['name'])) $this->errors['name'] = 'name field is required';
        
        if($this->phoneAlreadyExists($request['phone_number'])) $this->errors['phone_number'] = 'Phone number has been taken';
        if(!$this->isPhoneNumberValid($request['phone_number'])) $this->errors['phone_number'] = 'phone number is not valid';
        if($this->isEmpty($request['phone_number'])) $this->errors['phone_number'] = 'phone number field is required';
       
        if($this->isEmpty($request['password'])) $this->errors['password'] = 'password field is required';

        
        return $this->errors;
        
    }

    public function emailAlreadyExists($email){
        $user = new User;
        return $user->query([], " where email = '$email'");
    }

    public function phoneAlreadyExists($phone_number){
        $user = new User;
        return $user->query([], " where phone_number = '$phone_number'");
    }
    
}