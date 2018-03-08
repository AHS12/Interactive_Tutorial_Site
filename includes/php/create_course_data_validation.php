<?php require_once "../database/db_connection.php"?>
<?php require_once "session.php";?>
<?php require_once "functions.php"?>
<?php
if(isset($_GET['content'])){
    $content_id = $_GET['content'];
    global $connection;
    $query = "UPDATE content SET visibility = 1 WHERE content_id = {$content_id}";
    $result = mysqli_query($connection,$query);

    if(!$result){
        die("failed ". mysqli_error($connection));
    }else{
        redirect_to("../../public/course_manage.php");
    }


}

?>