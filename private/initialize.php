<?php
    ob_start(); // output

    // Assign file paths to PHP constants
    // __FILE__ returns the current path to this file
    // dirname() returns the path to the parent directory
    define("PRIVATE_PATH", dirname(__FILE__));
    define("PROJECT_PATH", dirname(PRIVATE_PATH));
    define("PUBLIC_PATH", PROJECT_PATH . '/public');
    define("SHARED_PATH", PRIVATE_PATH . '/shared');

    // Assign the root URL to a PHP constant
    // * Do not need to include the domain
    // * Use same document root as webserver
    // * Can set a hardcoded value:
    // define("WWW_ROOT", '/xampp732/htdocs/globe_bank/public');
    // define("WWW_ROOT", '');
    // * Can dynamically find everything in URL up to "/public"
    $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
    $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
    define("WWW_ROOT", $doc_root);

    require_once('functions.php');

    /* 
    * Require database.php and related code and save db_connect(); inside a variable
    * This allows to connect to the db by any page that call inizialize.php
    * I also added db_disconnect($db); into the staff_footer.php so the database connection
    * will be close in any page that contains the footer if it is open
    */
    require_once('database.php');
    require_once('query_functions.php');
    require_once('validation_functions.php');
    $db = db_connect();
    $errors = [];

?>