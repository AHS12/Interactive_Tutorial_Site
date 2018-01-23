<?php require_once ("../includes/database/db_connection.php")?>
<?php require_once ("../includes/php/functions.php")?>
<?php require_once ("../includes/php/session.php")?>
<?php include "../includes/layouts/header2.php" ?>
<?php
teacher_logged_in();
?>
    <div class="container">
        <div class="container" style="margin-left: 0;">
            <div class="row" style="padding:4px;">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <img style="height: 150px; width: 50%;"  src="../style/pictures/dash_publish_illustration.png" class="img-responsive">
                        </div>
                        <div class="col-md-4">
                            <h4"><a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a> Name of the course</h4>

                        </div>
                        <div class="col-md-4">
                            <a href="#" class="btn btn-primary" style="width: 150px; float: right;padding-left: 20px;">
                                <i class="fa fa-cog" aria-hidden="true"></i> Course Settings
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <hr>

        <!-- side bar processs start -->
        <div class="container" style="margin-left: 0;">
            <div class="col-sm-2">
                <?php include "../includes/layouts/create_course_nav.php"?>
                <!-- <div><h2 class="add">Place for your add!</h2></div> -->
            </div>
            <!-- tab content -->
            <div class="tab-content" style="background: #fff;">
                <div class="tab-pane active text-style" id="tab1">
                    <div class="container" >
                        <div class="row">

                            <div class="col-md-8">
                                <div class="row" style="margin-top: 0;">
                                    <div class="col-md-6">
                                        <h2>Communication</h2>
<!--                                        --><?php
//
//                                        $user_id = $_SESSION['user_id'];
//                                        $content_title = "content_title"."$user_id";
//                                        $content_category = "content_category"."$user_id";
//                                        $content_level = "content_level"."$user_id";
//                                        $content_requirements = "content_requirements"."$user_id";
//                                        $content_what_to_learn = "content_what_to_learn"."$user_id";
//                                        $content_details = "content_details"."$user_id";
//                                        $content_tags = "content_tags"."$user_id";
//
//                                        if(isset($_POST['submit'])){
//                                            echo $_SESSION['$content_title'] = mysqli_prep($_POST['content_title'])."<br>";
//                                            echo $_SESSION['$content_category'] = mysqli_prep($_POST['content_category'])."<br>";
//                                            echo $content_level = $_POST['content_level']."<br>";
//                                            echo $content_requirements = $_POST['content_requirements']."<br>";
//                                            echo $content_what_to_learn = $_POST['content_what_to_learn']."<br>";
//                                            echo $content_details = $_POST['content_details']."<br>";
//                                            echo $content_tags = $_POST['content_tags']."<br>";
//                                        }
//                                        ?>

                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="btn btn-primary" style="float: right;margin-top: 15px;">Save</a>
                                    </div>
                                </div>
                                <hr style="width: 100%">
                                <p style="font-size: 16px;">Whether you've been teaching for years or are teaching for the first time, you can make an engaging course. We've compiled resources and best practices to help you get to the next level, no matter where you're starting.</p>


                                <form action="create_course.php" method="post">


                                        <label for="content_requirements">Welcome Message</label>
                                        <textarea rows="5" class="form-control" name="content_requirements" ></textarea>
                                        <br>

                                        <label for="content_what_to_learn">Congratulations Message</label>
                                        <textarea rows="5" class="form-control" name="content_what_to_learn" ></textarea>
                                        <br>


<!--                                            <script type="text/javascript">-->
<!--                                                function readURL(input) {-->
<!--                                                    if (input.files && input.files[0]) {-->
<!--                                                        var reader = new FileReader();-->
<!---->
<!--                                                        reader.onload = function (e) {-->
<!--                                                            $('#preview').attr('src', e.target.result);-->
<!--                                                        };-->
<!---->
<!--                                                        reader.readAsDataURL(input.files[0]);-->
<!--                                                    }-->
<!--                                                }-->
<!--                                            </script>-->

<!--                                            <input type="file" name="image" onchange="readURL(this)"> <br>-->
<!--                                            <img width="240" height="240" id="preview" src="#" alt=""> <br>-->
<!---->
<!--                                        </p>-->
<!---->
<!--                                        <input style="float: right; margin-bottom: 10px" type="submit" name="submit" class="btn btn-success btn-lg">-->
<!--                                        <br>-->
<!--                                    </div>-->


                                </form>


                            </div>
                            <div class="col-md-2" style="margin-left: 5px;">

                                <h3>Helpful Tips</h3>
                                <p style="font-size: 16px;">Whether you've been teaching for years or are teaching for the first time, you can make an engaging course. We've compiled resources and best practices to help you get to the next level, no matter where you're starting.</p>

                            </div>

                        </div>
                    </div>
                </div>

            </div>


        </div>

        <!-- side bar process end -->

    </div>
<?php include "../includes/layouts/footer.php"?>