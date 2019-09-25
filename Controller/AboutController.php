<?php 

require_once(__DIR__.'/../Model/ContactModel.php');

class AboutController {
    public function run() {
        // Check if the request has a SECTION parameter set in its URL (GET Parameter) AND SECTION is not empty/null
        if(array_key_exists('section', $_GET) && $_GET['section']) {
            // IF there is a SECTION parameter, initialize $section to this value
            $section = $_GET['section'];
        } else {
            // IF there is NOT a SECTION parameter, initialize $section to about
            $section = "about";
        }

        // Using the $section variable, intialize the $template variable
        // NOTE: when we use " (double quotes), we can include the variable as part of the string
        $template = "about/about_content_$section.php"; // if section = about, template = about_content_about.php
        
        include(__DIR__.'/../assets/views/base.php');
        
    }
}