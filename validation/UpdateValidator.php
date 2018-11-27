<?php
require_once('BaseValidator.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/documentation/model/User.php');


class UpdateValidator extends BaseValidator{

    public $errors;

    public function __construct(){
        $this->errors = [];
    }
    //hgvygvh
    

    public function validateee($request){

        if($this->isEmpty($request['name'])) $this->errors['name'] = '*Name field is required';

        if($this->isEmpty($request['email'])) $this->errors['email'] = '*Email field is required';

        if($this->isEmpty($request['phone_number'])) $this->errors['phone_number'] = '*Phone number field is required'; 

        if($this->isEmpty($request['facebook_link'])) $this->errors['facebook_link'] = '*URL field is required';

        if($this->isEmpty($request['twitter_link'])) $this->errors['twitter_link'] = '*URL field is required';



        return $this->errors;

    }

}