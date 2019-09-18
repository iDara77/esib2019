<?php 

require_once('ContactModel.php');

class ContactController {
    public function run() {
        $contactModel = new ContactModel();
        // If the user has POSTed the data
        if(array_key_exists('send-btn',$_POST)) {
            $contactModel->data = $_POST;
            // Validate data
            $isValid = $contactModel->validate();
            // IF valid, save it and thank user
            if($isValid) {
                $contactModel->save();
                include('contact_view_success.php');
            }
            // IF NOT, render form with errors
            else {
                include('contact_view_form.php');
            }
        } else {
            include('contact_view_form.php');
        }
    }
}