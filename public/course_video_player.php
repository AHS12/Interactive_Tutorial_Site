<?php
/**
 * Created by PhpStorm.
 * User: MD AZIZUL HAKIM
 * Date: 18/01/2018
 * Time: 11:42 AM
 */

?>

<?php
//@ob_start();
//if (session_status() != PHP_SESSION_ACTIVE) session_start();

require_once "../includes/database/db_connection.php";
require_once "../includes/php/functions.php";
confirm_logged_in();

//?>

<?php $content_id = get_selected_content_by_id();


?>
<?php
$video_id = null;
$video_url = null;
$video_desc = null;
$video_mtitle = null;

if (isset($_GET['video_id'])) {

    $video_id = $_GET['video_id'];


    $query = "SELECT * FROM content_resources WHERE video_id = '$video_id'";
    $result = mysqli_query($connection, $query);

    while ($video_data = mysqli_fetch_assoc($result)) {
        $_SESSION['current_content_id'] = $video_data['video_content_id'];
        $video_url = $video_data['file_url'];
        $video_mtitle = $video_data['video_title'];
        $video_desc = $video_data['video_desc'];
    }
//    $video_data = mysqli_fetch_assoc($result);

    $query_content_name = "SELECT * FROM content WHERE content_id = '{$_SESSION['current_content_id']}' LIMIT 1";
    $current_content_title = mysqli_query($connection, $query_content_name);
    while ($content_data = mysqli_fetch_assoc($current_content_title))
    {
        $_SESSION['current_content_title'] = $content_data['content_title'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $video_mtitle ?></title>

    <!-- Bootstrap core CSS -->
    <link href="../lib/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../style/videoplayer.css" rel="stylesheet">

</head>

<body>

<div id="wrapper">

    <?php
    if (isset($content_id)) {
        $content_values = find_selected_content_by_id($content_id);
        $_SESSION['current_content_title'] = htmlentities(mysqli_prep($content_values['content_title']));
        $_SESSION['current_content_id'] = $content_id;
    }
    ?>
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <h4 class="text-center">
                    <?php
                    //                    error_reporting(0);
                    echo $_SESSION['current_content_title']; ?>
                </h4>
            </li>
            <?php
            echo "<br>";
            $query = "SELECT * FROM content_resources WHERE video_content_id = '{$_SESSION['current_content_id']}'";
            $result = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                $serial = $row['video_serial'];
                $video_id = $row['video_id'];
                $video_title = $row['video_title'];

                ?>


                <li>
                    <a href="course_video_player.php?video_id=<?php echo $video_id ?>"><?php echo $serial . ". " . $video_title ?></a>
                </li>


                <?php
            }


            ?>



        </ul>
    </div>


    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div>
            <a href="#menu-toggle" class="btn btn-success" id="menu-toggle">Course Playlist</a>
            <a href="course_view.php?content=<?php echo $_SESSION['current_content_id'] ?>" class="btn btn-primary">Back
                To Curriculum</a>
        </div>
        <div class="container text-center">

            <h2 class="text-center"><?php

                if (isset($_GET['video_id'])) {
                    echo $video_mtitle;
                } else echo "Select Video From Playlist";

                ?></h2><br>
            <!--            <h3>--><?php //echo $video_url ?><!--</h3>  <br>-->
            <hr>

            <div style="max-width: 700px;
                        max-height: 400px;
                        margin-right: auto;
                        margin-left: auto;">
                <div class="embed-responsive embed-responsive-16by9">
                    <video controls loop autoplay class="embed-responsive-item">
                        <source src="<?php

                        if (isset($_GET['video_id'])) {
                            echo "../videos/" . $video_url;
                        }

                        ?>" type="video/mp4">
                    </video>
                </div>
            </div>

        </div>


        <hr>

        <div class=" container text-center">

            <h3>Lecture Description</h3>
            <p> <?php

                if (isset($_GET['video_id'])) {
                    echo $video_desc;
                } else echo "Select Video From Playlist";

                ?></p>
        </div>


    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
<script src="../lib/jquery-3.2.1.min.js"></script>
<script src="../lib/bootstrap.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>

</html>

