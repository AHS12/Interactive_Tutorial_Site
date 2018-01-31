<?php require_once("../includes/database/db_connection.php") ?>
<?php require_once("../includes/php/functions.php") ?>
<?php require_once("../includes/php/session.php") ?>
<?php require_once "../includes/layouts/header2.php" ?>

<?php
teacher_logged_in();
?>
<?php require_once("../includes/php/create_course_data.php") ?>

    <div class="container">
        <?php include("../includes/layouts/create_course_header.php") ?>
        <hr>
    </div>
    <!-- side bar processs start -->
    <div class="container" style="margin-left: 0;">
        <div class="col-sm-2">
            <?php include "../includes/layouts/create_course_nav.php" ?>
            <!-- <div><h2 class="add">Place for your add!</h2></div> -->
        </div>
        <!-- tab content -->
        <div class="tab-content" style="background: #fff;">
            <div class="tab-pane active text-style" id="tab1">
                <div class="container">
                    <div class="row">

                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2>Upload Video</h2>

                                </div>
                            </div>
                            <hr style="width: 100%">


                            <h4 class="text-center alert alert-danger">Note: Mamximum video Limit is 200mb
                                and video
                                formate must me .mp4</h4>
                            <hr>
                            <div class="row">
                                <div style="" class="col-md-6">
                                    <form id="upload_form" enctype="multipart/form-data" method="post">

                                        <div class="col-md-6">
                                            <input style="width: 250px" class="text-center btn btn-info"
                                                   type="file" name="fileup"
                                                   id="file1"> <br>

                                            <input class="text-center btn btn-success" type="button"
                                                   name="upload"
                                                   value="Upload video"
                                                   onclick="uploadFile()"> <br> <br>
                                            <progress id="progressBar" value="0" max="100"
                                                      style="width:300px;"></progress>
                                            <h3 id="status"></h3> <br>
                                        </div>

                                        <!--        <p id="loaded_n_total"></p>-->
                                    </form>


                                </div>
                            </div>


                            <div>
                                <form method="post" enctype="multipart/form-data"
                                      action="../includes/php/video_record.php">


                                    <?php

                                    if (isset($_SESSION["successMsg"])) {
                                        echo "<h2 id=\"message\" class=\"text-center alert alert-danger\"><strong>Video Record inserted!</strong></h2>";
                                    }

                                    unset($_SESSION['successMsg']);
                                    ?>


                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">Title</span>
                                        <input type="text" class="form-control" placeholder="Title"
                                               name="title"
                                               aria-describedby="basic-addon1"
                                               required>
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">Description</span>
                                        <textarea class="form-control" placeholder="Description"
                                                  name="desc"
                                                  aria-describedby="basic-addon1" required></textarea>
                                    </div>
                                    <br>
                                    <div>
                                        <button class="btn btn-success" name="submitvideodata">Submit
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <hr>
                            <h3>Uploded Video List</h3>
                            <hr>

                            <table class="table table-bordered table-responsive">
                                <thead>
                                <tr class="bg-success">
                                    <th>Serial</th>
                                    <th>Video Title</th>
                                    <th>Video Description</th>
                                    <th>Length/Duration</th>

                                </tr>
                                </thead>

                                <?php
                                /*include "../includes/database/database.php";*/
                                require_once "../lib/getid3/getid3.php";
                                $getID3 = new getID3;

                                $content_id = $_SESSION['content_id'];

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
                                    </tr>


                                    <?php
                                }


                                ?>

                                <tbody>


                                </tbody>
                            </table>

                        </div>


                    </div>
                </div>

                <!--                <div class="col-md-2" style="margin-left: 5px;">-->
                <!---->
                <!--                    <h2>Lorem ipsum lorem ipsum</h2>-->
                <!--                    <p style="font-size: 16px;">Whether you've been teaching for years or are teaching for-->
                <!--                        the first time, you can make an engaging course. We've compiled resources and best-->
                <!--                        practices to help you get to the next level, no matter where you're starting.</p>-->
                <!--                    <a href="#">View Details</a>-->
                <!--                </div>-->


            </div>
        </div>
    </div>


    <!-- side bar process end -->

<?php include "../includes/layouts/footer.php" ?>