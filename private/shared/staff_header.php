<?php
    // Set page title if it does't exist
    if (!isset($page_title)) {
        $page_title = 'Staff Area';
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta naem="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Add staff.css -->
        <link rel="stylesheet" type="text/css" href="<?= url_for('/stylesheets/staff.css'); ?>">

        <title>GBI - <?= h($page_title); ?></title>
    </head>
    <body>
        <header>
            <h1>GBI Staff Area</h1>
        </header>

        <navigation>
            <ul>
                <li><a href="<?= url_for('/staff/index.php'); ?>">Menu</a></li>
            </ul>
        </navigation>
