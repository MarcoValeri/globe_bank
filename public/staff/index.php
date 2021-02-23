<?php 
    // Require initialize.php and related code
    require_once('../../private/initialize.php');
?>  

<?php
    // Set the page title inside a variable
    $page_title = "Staff Menu";
?>

<?php 
    // Include header_staff.php and related code
    include(SHARED_PATH . '/staff_header.php');

?>

<div id="content">
    <div id="main-menu">
        <h2>Main Menu</h2>
        <ul>
            <li><a href="<?= url_for('staff/subjects/index.php'); ?>">Subjects</a></li>
            <li><a href="<?= url_for('staff/pages/index.php'); ?>">Pages</a></li>
        </ul>
    </div>
</div>

<?php 

include(SHARED_PATH . '/staff_footer.php');

?>