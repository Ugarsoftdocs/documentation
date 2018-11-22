<?php

class BaseValidator{

    public function isEmpty($value){
        $value = $this->sanitizeInput($value);
        return empty($value);
    }

    public function isNameValid($value){
        $value = $this->sanitizeInput($value);
        return preg_match("/^[a-zA-Z ]*$/", $value);
    }

    public function isEmailValid($value){
        $value = $this->sanitizeInput($value);
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    public function isPhoneNumberValid($value){
        $value = $this->sanitizeInput($value);
        return preg_match("/0[7-9][0-1][0-9]{8}/", $value);
    }

    public function isLength($value, $length){
        $value = $this->sanitizeInput($value);
        return strlen($value) == $length;
    }

    public function minLength($value, $length){
        $value = $this->sanitizeInput($value);
        return strlen($value) >= $length;
    }

    public function maxLength($value, $length){
        $value = $this->sanitizeInput($value);
        return strlen($value) <= $length;
    }

    private function sanitizeInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
}