<?php
    // Require initialize.php and related code
    require_once('../../../private/initialize.php');
?>

<?php
    // Save all page by the db inside a variable
    $page_set = find_all_pages();

?>

<?php
    // Set the page title inside a variable
    $page_title = "Pages";
?>

<?php
    // Include staff_header.php and related code
    include(SHARED_PATH . '/staff_header.php');
?>

<div id="content">
    <div class="pages listing">
        <h1>Pages</h1>

        <div class="actions">
            <a class="action" href="<?= url_for('staff/pages/new.php'); ?>">Create New Page</a>
        </div>

        <table class="list">
            <tr>
                <th>ID</th>
                <th>Position</th>
                <th>Visible</th>
                <th>Name</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>

            <?php while($page = mysqli_fetch_assoc($page_set)) { ?>
            <tr>
                <td><?= h($page['id']); ?></td>
                <td><?= h($page['subject_id']); ?></td>
                <td><?= h($page['position']); ?></td>
                <td><?= $page['visible'] == 1 ? 'true' : 'false'; ?></td>
                <td><?= h($page['menu_name']); ?></td>
                <td><a class="action" href="<?= url_for('staff/pages/show.php?id=' . h(u($page['id']))); ?>">View</a></td>
                <td><a class="action" href="<?= url_for('staff/pages/edit.php?id=' . h(u($page['id']))); ?>">Edit</a></td>
                <td><a class="action" href="">Delete</a></td>
            </tr>
            <?php } ?>
        </table>

        <?php mysqli_free_result($page_set); ?>

    </div>
</div>

<?php
    // Include staff_footer.php and related code
    include(SHARED_PATH . '/staff_footer.php');
?>