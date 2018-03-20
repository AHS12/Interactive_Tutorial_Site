<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 1/24/2018
 * Time: 12:38 PM
 */
?>
<?php
include "../database/db_connection.php";
include "functions.php"; ?>
<?php

$delete_course_id = get_selected_content_by_id();

//Deleting Main Content Data

$query_get_course_image = "SELECT conten_picture FROM content WHERE content_id = '$delete_course_id'";
$found_img = mysqli_query($connection, $query_get_course_image);

while ($row = mysqli_fetch_assoc($found_img)) {
    $image = $row['content_picture'];
    unlink("../../images/".$image);
}

$query_delete_content = "Delete FROM interactivets.content WHERE content_id = '$delete_course_id'";
$result = mysqli_query($connection, $query_delete_content);
if (!$result) {
    die("Failed1!!!" . mysqli_error($connection));
} else {

    //deleting all resource related to Content

    $query_content_resource = "SELECT * FROM content_resources WHERE video_content_id = '$delete_course_id'";
    $resource_result = mysqli_query($connection, $query_content_resource);


    if (!$resource_result) {
        die("Failed2!!!" . mysqli_error($connection));
    } else {

        if (mysqli_num_rows($resource_result) > 0) {

            while ($row = mysqli_fetch_assoc($resource_result)) {
                $file_url = $row['file_url'];
                unlink("../" . $file_url);
            }

            $delete_all_resource_Query = "DELETE FROM content_resources WHERE video_content_id ='$delete_course_id'";
            $result = mysqli_query($connection, $delete_all_resource_Query);

            if (!$result) {
                die("Failed3!!!" . mysqli_error($connection));
            }
        }
    }


    $query_exam = "SELECT * FROM exam_ques WHERE content_id = '$delete_course_id'";
    $exam_result = mysqli_query($connection, $query_exam);

    if (!$exam_result) {
        die("Failed4!!!" . mysqli_error($connection));
    } else {
        if (mysqli_num_rows($exam_result) > 0) {
            $delete_all_exam_Query = "DELETE FROM exam_ques WHERE content_id ='$delete_course_id'";
            $result = mysqli_query($connection, $delete_all_exam_Query);

            if (!$result) {
                die("Failed5!!!" . mysqli_error($connection));
            }
        }
    }

    if (isset($_GET['delete'])) {
        redirect_to("../../public/create_course_landing.php");
    }

}
