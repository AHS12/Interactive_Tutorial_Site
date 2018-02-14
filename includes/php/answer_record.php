<?php
/**
 * Created by PhpStorm.
 * User: MD AZIZUL HAKIM
 * Date: 14/02/2018
 * Time: 11:32 PM
 */

require_once "../database/db_connection.php";
require_once "functions.php";
require_once "session.php";

if (isset($_POST['submit_ans'])) {
    $exam_ans = mysqli_prep($_POST['answer']);

    if (isset($_FILES['code'])) {
        $fileTmp = $_FILES['code']['tmp_name'];
        $exam_file = time() . $_FILES['code']['name'];
        $fileType = $_FILES['code']['type'];
        $filePath = "../../answers/" . $exam_file;
    }
    else $filePath = " ";

    move_uploaded_file($fileTmp, $filePath);

    $exam_id = $_SESSION['current_exam_id'];
    $examinee_id=$_SESSION['user_id'];

    $query = "INSERT INTO exam_ans(ques_id,examinee_id, answer, answer_url) ";
    $query .= "VALUES('$exam_id','$examinee_id','$exam_ans','$filePath')";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Failed!!!" . mysqli_error($connection));
    } else {
        header("location: ../../public/course_exam.php?exam=$exam_id");

    }

}