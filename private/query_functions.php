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
    function insert_subject($menu_name, $position, $visible) {
        global $db;

        // Handle form values send by new.php
        $menu_name = $_POST['menu_name'] ?? '';
        $position = $_POST['position'] ?? '';
        $visible = $_POST['visible'] ?? '';

        $sql = "INSERT INTO subjects ";
        $sql .= "(menu_name, position, visible) ";
        $sql .= "VALUES (";
        $sql .= "'" . $menu_name . "',";
        $sql .= "'" . $position . "',";
        $sql .= "'" . $visible . "'";
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