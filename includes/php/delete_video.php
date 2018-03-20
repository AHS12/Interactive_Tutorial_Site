<?php
/**
 * Created by PhpStorm.
 * User: MD AZIZUL HAKIM
 * Date: 15/03/2018
 * Time: 03:13 PM
 */ ?>

<?php include "../database/db_connection.php"; ?>
<?php include "functions.php"; ?>

<?php
$deleted_video_id = get_selected_content_by_id();

$query = "SELECT file_url FROM content_resources WHERE video_id = '$deleted_video_id'";

$result = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $video_url = $row['file_url'];
    delete_video($video_url);

    $query_Delete = "DELETE FROM content_resources WHERE video_id = '$deleted_video_id'";
    $result = mysqli_query($connection, $query_Delete);

    if (!$result) {
        die("Failed1!!!" . mysqli_error($connection));
    } else {
        redirect_to("../../public/create_course_curriculum.php");
    }

}


?>
