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
                                    <h2 class="text-center">Upload Video</h2>

                                </div>
                            </div>
                            <hr style="width: 100%">


                            <h4 class="text-center alert alert-success">Note: Mamximum video Limit is 200mb
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
                                        echo "<h2 id=\"message\" class=\"text-center alert alert-success\"><strong>Video Record inserted!</strong></h2>";
                                    }

                                    unset($_SESSION['successMsg']);
                                    //                                    redirect_to("create_course_curriculum.php")
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


                            <script>


                                var addSerialNumber = function () {
                                    $('#vidtable').each(function (index) {
                                        $(this).find('td:nth-child(1)').html(index + 1);
                                    });
                                };

                                addSerialNumber();


                            </script>

                            <table id="vidtable" class="table table-bordered table-responsive">
                                <thead>
                                <tr class="bg-success">
                                    <th>Serial</th>
                                    <th>Video Title</th>
                                    <th>Video Description</th>
                                    <th>Length/Duration</th>
                                    <th>Delete</th>
                                    <th>Edit</th>


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


                                        <td>
                                            <a class="button btn btn-danger"
                                               href="../includes/php/delete_video.php?vid=<?php echo $video_id ?> ">Delete</a>
                                        </td>
                                        <td><a class=" btn btn-primary" href="">Update</a></td>
                                    </tr>


                                    <?php
                                }


                                ?>


                                </tbody>
                            </table>

                            <hr>
                            <div>
                                <h2 class="text-center">Create Exam</h2>


                                <form method="post" enctype="multipart/form-data"
                                      action="../includes/php/question_record.php">
                                    <label for="create_question">Enter Question</label>
                                    <textarea rows="5" class="form-control" name="create_question"></textarea>
                                    <br>

                                    <p>Select Week:
                                        <select name="week">
                                            <?php
                                            $query = "SELECT video_serial FROM content_resources WHERE video_content_id = '$content_id'";
                                            $result = mysqli_query($connection, $query);

                                            $number_of_videos = mysqli_num_rows($result);
                                            $video_week = ceil($number_of_videos / 7);

                                            for ($count = 1; $count <= $video_week; $count++) {
                                                echo "<option value=\"${count}\"";
                                                if ($video_week == $count) {
                                                    echo " selected";
                                                }
                                                echo ">{$count}</option>";
                                            }
                                            ?>

                                        </select>

                                    </p>

                                    <br>
                                    <div>
                                        <button class="btn btn-success" name="submitques">Submit
                                        </button>
                                    </div>


                                </form>
                                <br>

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
                                                    <a href="../includes/php/delete_ques.php?delqid=<?php echo htmlentities($exam_id) ?>" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>

                                        <?php } ?>
                                        </tbody>
                                    </table>

                                </div>


                            </div>

                        </div>


                    </div>
                </div>


            </div>
        </div>
    </div>


    <!-- side bar process end -->

<?php include "../includes/layouts/footer.php" ?>