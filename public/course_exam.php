<?php

@ob_start();
if (session_status() != PHP_SESSION_ACTIVE) session_start();

require_once "../includes/php/functions.php";
confirm_logged_in();

?>


<?php require_once "../includes/database/db_connection.php" ?>
<?php require_once "../includes/php/functions.php" ?>
<?php require_once "../includes/layouts/header2.php" ?>
<?php $exam_id = get_selected_content_by_id();
?>


<br>
<br>
<!-- jQuery library -->
<script src="../lib/jquery-3.2.1.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="../lib/bootstrap.min.js"></script>

</body>
</html>
