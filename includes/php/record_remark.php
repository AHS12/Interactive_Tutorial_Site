<?php
/**
 * Created by PhpStorm.
 * User: MD AZIZUL HAKIM
 * Date: 21/03/2018
 * Time: 12:37 AM
 */


require_once "../database/db_connection.php";
require_once "functions.php";
require_once "session.php";

if (isset($_POST['submit_marks'])){

    $ans_id = $_SESSION['ans_id'];
    $marks = mysqli_escape_string($connection,$_POST['marks']);
    $content_id = $_SESSION['marks_content_id'];

    $query_update_mark = "UPDATE exam_ans SET marks = '$marks' WHERE id = '$ans_id'";

    $result =mysqli_query($connection,$query_update_mark);

    if (!$result) {
        die("Failed!!!" . mysqli_error($connection));
    } else {
        redirect_to("../../public/course_student_manage.php?content=$content_id");
    }

}