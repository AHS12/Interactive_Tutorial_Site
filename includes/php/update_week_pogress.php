<?php require_once "init.php" ?>
<?php
if (isset($_GET['cid']) && isset($_GET['week'])) {

    $current_user_id = $_SESSION['user_id'];
    $current_content_id = $_GET['cid'];
    $week_progress = $_GET['week'];
    $db_week_progress = get_week_progress($current_user_id, $current_content_id);

    //preventing fake progress
    if ($week_progress == $db_week_progress) {

        $week_progress++;
        $query = "UPDATE content_enrolled SET week_progress = '$week_progress' WHERE ";
        $query .= "content_id ='$current_content_id' AND user_id='$current_user_id'";

        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("failed " . mysqli_error($connection));
        } else {
            redirect_to("../../public/course_view.php?content=$current_content_id");
        }

    } else {
        redirect_to("../../public/course_view.php?content=$current_content_id");
    }


}


?>
