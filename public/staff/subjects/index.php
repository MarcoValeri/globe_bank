<?php 
    // Require initialize.php and related code
    require_once('../../../private/initialize.php');
?>  

<?php

    // Create a query by the db
    $subject_set = find_all_subjects();
?>

<?php
    // Set the page title inside a variable
    $page_title = "Subjects";
?>

<?php 
    // Include header_staff.php and related code
    include(SHARED_PATH . '/staff_header.php');

?>

<div id="content">
    <div class="subjects listing">
      <h1>Subjects</h1>

      <div class="actions">
          <a class="action" href="<?= url_for('/staff/subjects/new.php'); ?>">Create New Subject</a>
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

            <?php while($subject = mysqli_fetch_assoc($subject_set)) { ?>
            <tr>
                <td><?= h($subject['id']); ?></td>
                <td><?= h($subject['position']); ?></td>
                <td><?= $subject['visible'] == 1 ? 'true' : 'false'; ?></td>
                <td><?= h($subject['menu_name']); ?></td>
                <td><a class="action" href="<?= url_for('/staff/subjects/show.php?id=' . h(h($subject['id']))); ?>">View</a></td>
                <td><a class="action" href="<?= url_for('/staff/subjects/edit.php?id=' . h(u($subject['id']))); ?>">Edit</a></td>
                <td><a class="action" href="">Delete</a></td>
            </tr>
            <?php } ?>
      </table>

    <?php
        // Gets the result by the query above
        mysqli_free_result($subject_set);
    ?>

    </div>
</div>

<?php 

include(SHARED_PATH . '/staff_footer.php');

?>