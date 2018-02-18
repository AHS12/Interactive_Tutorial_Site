<?php require_once "../database/db_connection.php"?>
<?php require_once "session.php";?>
<?php require_once "functions.php"?>
<?php

if(isset($_GET['content'])){
    confirm_logged_in();
    $content_id = $_GET['content'];
    $user_id = $_SESSION['user_id'];
    $week_progress = 1;

    $query = "INSERT INTO content_enrolled (content_id, user_id,week_progress) VALUES ('$content_id','$user_id','$week_progress')";
    $set_user_enrollment = mysqli_query($connection, $query);
    if(!$set_user_enrollment){
        die("failed". mysqli_error($connection));
    }else{
        redirect_to("../../public/course_view.php?content=$content_id");
    }

}