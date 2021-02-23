<?php

    require_once('db_credentials.php');

    // Connect to the database
    function db_connect() {
        $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        confirm_db_connect();
        return $connection;
    }

    // Close the connection to the database
    function db_disconnect($connection) {
        if (isset($connection)) {
            mysqli_close($connection);
        }
    }

    // Create a function that checks if the web application is connects to the db
    function confirm_db_connect() {
        if (mysqli_connect_errno()) {
            $msg = "Database connection failed: ";
            $msg .= mysqli_connect_error();
            $msg .= " (" . mysqli_connect_errno() . ")";
            exit($msg);
        }
    }

    // Create a function that checks if the db query has been attempted without any errors
    function confirm_result_set($result_set) {
        if (!$result_set) {
            exit("Database query failed.");
        }
    }

?>