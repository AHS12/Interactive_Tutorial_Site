<?php require_once "session.php";?>
<?php require_once "functions.php"?>
<?php
$show_modal = 0;
if(isset($_GET['alert'])){
    $show_modal = true;
    $_SESSION['data_checking_true'] = $show_modal;
    redirect_to("../../public/create_course.php");

}

?>