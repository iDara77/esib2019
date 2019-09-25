<?php

class ContactModel {

    public $data;
    public $hasErrors = false;
    public $errorMsg = [];

    public function validate() {
        if(!$this->data['email']) {
            $this->hasErrors = true;
            $this->errorMsg['email'] = "Please enter valid email";
        }
        if(!$this->data['message']) {
            $this->hasErrors = true;
            $this->errorMsg['message'] = "Please enter valid message";
        }
        return !$this->hasErrors;
    }
    public function save() {
        return true;
    }
}