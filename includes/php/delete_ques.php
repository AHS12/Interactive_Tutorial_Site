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
$delete_ques_id = get_selected_content_by_id();


$query_Delete = "DELETE FROM exam_ques WHERE ques_id = '$delete_ques_id'";
$result = mysqli_query($connection, $query_Delete);

if (!$result) {
    die("Failed1!!!" . mysqli_error($connection));
} else {
    redirect_to("../../public/create_course_curriculum.php");


}


?>
