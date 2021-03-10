<?php
    // Create a function that make a query relative subject inside the db
    function find_all_subjects() {
        global $db;
        $sql = "SELECT * FROM subjects ";
        $sql .= "ORDER BY position ASC";
        $result = mysqli_query($db, $sql);
        confirm_result_set($result);
        return $result;
    }

    // Create a function that find a single user by his/her id
    function find_subject_by_id($id) {
        global $db;

        $sql = "SELECT * FROM subjects ";
        $sql .= "WHERE id='" . $id . "'";
        $result = mysqli_query($db, $sql);
        confirm_result_set($result);
        $subject = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        return $subject; // returns an assoc. array
    }

    // Create a function that allows to add a subject
    function insert_subject($subject) {
        global $db;

        // Handle form values send by new.php

        $sql = "INSERT INTO subjects ";
        $sql .= "(menu_name, position, visible) ";
        $sql .= "VALUES (";
        $sql .= "'" . $subject['menu_name'] . "',";
        $sql .= "'" . $subject['position'] . "',";
        $sql .= "'" . $subject['visible'] . "'";
        $sql .= ")";
        $result = mysqli_query($db, $sql);
        // For INSERT statements, $result is true/false
        if ($result) {
            return true;
        } else {
            // INSERT failed
            echo mysqli_error($db);
            db_disconnect($db);
            exit;
        }
    }

    // Create a function that allows to update data into db
    function update_subject($subject) {
        global $db;

        $sql = "UPDATE subjects SET ";
        $sql .= "menu_name='" . $subject['menu_name'] . "', ";
        $sql .= "position='" . $subject['position'] . "', ";
        $sql .= "visible='" . $subject['visible'] . "' ";
        $sql .= "WHERE id='" . $subject['id'] . "' ";
        $sql .= "LIMIT 1";

        $result = mysqli_query($db, $sql);
        // For UPDATE statements, $result is true/false
        if ($result) {
            return true;
        } else {
            // UPDATE failded
            echo mysqli_error($db);
            db_disconnect($db);
            exit;
        }
    }

    // Create a function that make a query relative psges inside the db
    function find_all_pages() {
        global $db;

        $sql = "SELECT * FROM pages ";
        $sql .= "ORDER BY subject_id ASC, position ASC";
        $result = mysqli_query($db, $sql);
        confirm_result_set($result);
        return $result;
    }
?>