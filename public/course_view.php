<?php

@ob_start();
if (session_status() != PHP_SESSION_ACTIVE) session_start();

require_once "../includes/php/functions.php";
confirm_logged_in();

?>


<?php require_once "../includes/database/db_connection.php" ?>
<?php require_once "../includes/php/functions.php" ?>
<?php require_once "../includes/layouts/header2.php" ?>
<?php $content_id = get_selected_content_by_id();
?>

<?php
if (isset($content_id)) {
    ?>
    <div id="course_view" class="course_view">
        <div class="container" style="background-color: #182333;height: 300px; width: 100%;">
            <div class="row">

                <div class="col-lg-4">
                    <img style="margin-top: 40px;width: 90%;height: 200px;"
                         src=<?php

                    $content_values = find_selected_content_by_id($content_id);
                    echo "../images/" . htmlentities(mysqli_prep($content_values['content_picture']));

                    ?>>
                </div>
                <div class="col-lg-8">
                    <h2 style="color: #fff;"><?php

                        echo htmlentities(mysqli_prep($content_values['content_title']));

                        ?></h2>
                </div>
            </div>
        </div>
    </div>


    <div class="container bootstrap snippet">
        <div class="row">
            <div>

                <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a href="#home" data-toggle="tab">Curriculum</a></li>
                    <li><a href="#messages" data-toggle="tab">Course Details</a></li>
                    <li><a href="#settings" data-toggle="tab">Exams</a></li>
                </ul>






                <div class="tab-content" id="profile_tab">
                    <div class="tab-pane active" id="home">

                        <br>

                        <div>
                            <a href="course_video_player.php?content=<?php echo urlencode($content_id) ?>"
                               class="btn text-right btn-success">Play ALL Videos
                            </a>

                        </div>

                        <br>
                        <table class="table table-bordered table-responsive">
                            <thead>
                            <tr class="bg-success">
                                <th>Video Serial</th>
                                <th>Video Title</th>
                                <th>Video Description</th>
                                <th>Length/Duration</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>


                            <?php
                            /*include "../includes/database/database.php";*/
                            require_once "../lib/getid3/getid3.php";
                            try {
                                $getID3 = new getID3;
                            } catch (getid3_exception $e) {
                            }


                            if (isset($content_id)) {

                                $query = "SELECT * FROM content_resources WHERE video_content_id = '$content_id' ";

                                $result = mysqli_query($connection, $query);


                                while ($row = mysqli_fetch_assoc($result)) {

                                    $video_id = $row['video_id'];
                                    $video_url = $row['file_url'];
                                    $video_serial = $row['video_serial'];
                                    $video_title = $row['video_title'];
                                    $video_desc = $row['video_desc'];


                                    $min = " minutes";

//


                                    $fileData = $getID3->analyze($video_url);
                                    $video_duration = $fileData['playtime_string'];


                                    ?>

                                    <tr>
                                        <td>
                                            <?php
                                            if (isset($video_serial)) {
                                                echo $video_serial;
                                            } else {
                                                echo "#";
                                            }
                                            ?>

                                        </td>


                                        <td>
                                            <?php
                                            if (isset($video_title)) {
                                                echo $video_title;
                                            } else {
                                                echo "No data";
                                            }
                                            ?>
                                        </td>


                                        <td>
                                            <?php
                                            if (isset($video_desc)) {
                                                echo $video_desc;
                                            } else {
                                                echo "No data";
                                            }
                                            ?>
                                        </td>

                                        <td>
                                            <?php
                                            if (isset($video_duration)) {
                                                echo $video_duration . $min;
                                            } else {
                                                echo "No data";
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <a href="course_video_player.php?video_id=<?php echo urlencode($video_id) ?>"
                                               class="btn text-right btn-success">Play
                                            </a>
                                        </td>

                                    </tr>


                                    <?php
                                }
                            }


                            ?>




                            </tbody>
                        </table>


                    </div>





                    <!--/tab-pane-->
                    <div class="tab-pane" id="messages">

                        <div class="container">
                            <div class="row">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <h1 id="pad"> What will you learn?</h1>
                                        <div class="col-lg-12">
                                            <ul class="col-lg-6" id="left">
                                                <li>
                                                    <i class="fa fa-check"> <?php echo nl2br($content_values['content_what_to_learn']); ?></i>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>
                        <br><br>
                        <section>
                            <div class="container">
                                <div>
                                    <h3>Requirements</h3>
                                    <ol>
                                        <li><?php echo nl2br($content_values['content_requirements']); ?>
                                        </li>
                                    </ol>
                                </div>
                                <div>
                                    <h3>Description</h3>
                                    <p><?php echo nl2br($content_values['content_details']); ?></p><br>
                                </div>
                            </div>
                        </section>


                    </div><!--/tab-pane-->
                    <div class="tab-pane" id="settings">

                        <div>
                            <h3>Question Table</h3>
                            <br>


                            <table class="table table-bordered table-responsive">
                                <thead class="bg-success">
                                <tr>
                                    <th>Week</th>
                                    <th>Question</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>


                                <?php
                                $query = "SELECT * FROM exam_ques WHERE content_id = '$content_id' ";
                                $result = mysqli_query($connection, $query);

                                while ($row = mysqli_fetch_assoc($result)) {
                                    $exam_id = $row['ques_id'];
                                    $exam_week = $row['content_week'];
                                    $exam_ques = $row['question'];


                                    ?>
                                    <tr>
                                        <td><?php echo $exam_week ?></td>
                                        <td><?php echo $exam_ques ?></td>
                                        <td>
                                            <a href="course_exam.php?exam=<?php echo urlencode($exam_id)?>"
                                               class="btn btn-success">Participate</a>
                                        </td>
                                    </tr>

                                <?php } ?>
                                </tbody>
                            </table>
                        </div>


                    </div><!--/tab-pane-->
                    <div class="tab-pane" id="messages">


                        <hr>

                    </div>

                </div>
            </div>

        </div>
    </div>


    <?php
} else {
    echo "<br>";
    echo "<br>";
    echo "<p> Please select a content</p>";
}
?>


<br>
<br>
<!-- jQuery library -->
<script src="../lib/jquery-3.2.1.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="../lib/bootstrap.min.js"></script>

</body>
</html>