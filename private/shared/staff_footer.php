        <footer>
            &copy; <?= date('Y'); ?> Globe Bank
        </footer>
    </body>
</html>

<!-- 
    Call db_disconnect($db); that close the connection to the database
    if it is open
-->
<?php
    db_disconnect($db);
?>