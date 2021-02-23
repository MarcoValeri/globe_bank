<?php
    // Require initialize.php and related code
    require_once('../../../private/initialize.php');

    $id = $_GET['id'] ?? '1'; // PHP > 7.0

    echo h($id);

?>
<br />
<a href="show.php?name=<?= u('John Doe'); ?>">Link</a><br />
<a href="show.php?company=<?= u('Widgets&More'); ?>">Link</a><br />
<a href="show.php?query=<?= u('!#*?'); ?>">Link</a><br />