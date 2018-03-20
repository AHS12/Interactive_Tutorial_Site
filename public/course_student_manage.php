<?php
/**
 * Created by PhpStorm.
 * User: MD AZIZUL HAKIM
 * Date: 20/03/2018
 * Time: 03:23 PM
 */
?>
<?php require_once("../includes/database/db_connection.php"); ?>
<?php require_once("../includes/php/session.php"); ?>
<?php require_once("../includes/php/functions.php"); ?>
<?php require_once "../includes/layouts/header2.php" ?>

<?php
confirm_logged_in();
teacher_logged_in();
?>
<?php $content_id = get_selected_content_by_id(); ?>

<?php
if (isset($content_id)) {







    ?>


    <?php
} else {
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<p> Please select a content</p>";
}
?>


<?php include "../includes/layouts/footer.php" ?>
