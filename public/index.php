<?php require_once('../private/initialize.php'); ?>

<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

<?php include(SHARED_PATH . '/public_navigation.php'); ?>

  <div id="page">

    <?php 
      // Show the homepage
      // The homepage content could:
      // * the static content (here or in the shared file)
      // * show the first page the nav
      // * be in the database but add code to be hide in th nav
      include(SHARED_PATH . '/static_homepage.php'); 
    ?>

  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
