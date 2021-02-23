<?php
    // Require initialize.php and related code
    require_once('../../../private/initialize.php');

    $id = $_GET['id'] ?? '1'; // PHP > 7.0

    echo h($id);
?>

<?php
    // Save the title of the page inside a variable
    $page_title = 'Show Page';
?>

<?php
    // Include staff_header.php and related code
    include(SHARED_PATH . '/staff_header.php');
?>

<div id="content">
    <a class="back-link" href="<?= url_for('/staff/pages/index.php'); ?>">&laquo; Back to List</a>

    <div class="page show">
        Page ID: <?= h($id) ?>
    </div>
</div>