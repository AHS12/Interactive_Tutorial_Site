<?php
/**
 * Created by PhpStorm.
 * User: MD AZIZUL HAKIM
 * Date: 23/01/2018
 * Time: 01:01 PM
 */

@ob_start();
if (session_status() != PHP_SESSION_ACTIVE) session_start();


require_once "../database/database.php";
$db = new Database();

if (isset($_POST['submitvideodata'])) {

    $videoTitle = $db->escape_string($_POST['title']);
    $videoDesc = $db->escape_string($_POST['desc']);
    $videoFileName = $_SESSION['fileName'];
    $video_url = "../videos/" . $videoFileName;


    $content_id = $_SESSION['content_id'];

//    echo $videoTitle . $videoDesc . $newFileName . $video_url;


    //serial

    $video_serial = 0;
    $serial_query = "SELECT * FROM content_resources WHERE video_content_id = '$content_id'";
    $serial_result = $db->execute_query($serial_query);
    $serial_row = mysqli_num_rows($serial_result);
    $video_serial = $serial_row + 1;

    //week
    $video_week = ceil($video_serial / 7);


    $query = "INSERT INTO content_resources(video_content_id,file_name, file_url";
    $query .= ", video_serial,video_title,video_desc,video_week) VALUES";
    $query .= "('$content_id','$videoFileName','$video_url'";
    $query .= ",'$video_serial','$videoTitle','$videoDesc','$video_week')";

    $result = $db->execute_query($query);
    if (!$result) {
        die("Failed!!!" . mysqli_error($db->connection));
    }

//    session_unset();
    header("location: ../../public/create_course_curriculum.php");
    $_SESSION['successMsg'] = 1;

}