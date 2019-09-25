<?php 

require_once('../Model/ContactModel.php');

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
                $template = "contact_view_success.php";
                include('../assets/views/base.php');
            }
            // IF NOT, render form with errors
            else {
                $template = "contact_view_form.php";
                include('../assets/views/base.php');
            }
        } else {
            $template = "contact_view_form.php";
            include('../assets/views/base.php');
        }
    }
}