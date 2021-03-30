<?php

    function url_for($script_path) {
        // add the leading '/' if not present
        if ($script_path[0] != '/') {
            $script_path = "/" . $script_path;
        }
        return WWW_ROOT . $script_path;
    }

    // Create a function that sets urlencode
    function u($string="") {
        return urlencode($string);
    }

    // Create a function that sets rawurlencode
    function raw_u($string="") {
        return rawurlencode($string);
    }

    // Create a function that sets htmlspecialchars
    function h($string="") {
        return htmlspecialchars($string);
    }

    // Create a function for 404 server error
    function error_404() {
        header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
        exit();
    }

    // Create a function for 500 server error
    function error_500() {
        header($_SERVER['SERVER_PROTOCOL'] . " 500 Internal Server Error");
        exit();
    }

    // Create a function that set the redirect
    function redirect_to($location) {
        header("Location: " . $location);
        exit();
    }

    // Create a function that check if POST request method has been submit
    function is_post_request() {
        return $_SERVER['REQUEST_METHOD'] == 'POST';
    }

    // Create a function that check if GET request method has been submit
    function is_get_request() {
        return $_SERVER['REQUEST_METHOD'] == 'GET';
    }

    // Create a function that displays errors if they exist
    function display_errors($errors=array()) {

        $output = '';

        if(!empty($errors)) {
            $output .= "<div class=\"errors\">";
            $output .= "Please fix the following errors:";
            $output .= "<ul>";
          
            foreach($errors as $error) {
                $output .= "<li>" . h($error) . "</li>";
            }
            
            $output .= "</ul>";
            $output .= "</div>";
        }
        
        return $output;
    }
      
?>