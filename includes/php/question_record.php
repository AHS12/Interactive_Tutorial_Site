<?php
/**
 * Created by PhpStorm.
 * User: MD AZIZUL HAKIM
 * Date: 14/02/2018
 * Time: 12:31 PM
 */

require_once "../database/db_connection.php";
require_once "functions.php";
require_once "session.php";

if (isset($_POST["submitques"])) {
    $question = mysqli_prep($_POST["create_question"]);
    $week = $_POST["week"];
    $content_id = $_SESSION['content_id'];
    $teacher_id = $_SESSION["user_id"];


    $query = "INSERT into exam_ques(content_id, content_week, teacher_id, question) ";
    $query .= "VALUES('$content_id','$week','$teacher_id','$question')";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Failed!!!" . mysqli_error($connection));
    } else {
        header("location: ../../public/create_course_curriculum.php");

    }
}