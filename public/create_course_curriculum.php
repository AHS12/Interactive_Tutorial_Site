<?php require_once ("../includes/database/db_connection.php")?>
<?php require_once ("../includes/php/functions.php")?>
<?php require_once ("../includes/php/session.php")?>
<?php include "../includes/layouts/header2.php" ?>
<?php
teacher_logged_in();
?>
<?php require_once ("../includes/php/create_course_data.php")?>

    <div class="container">
        <?php include ("../includes/layouts/create_course_header.php")?>
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
                    <div class="container">
                        <div class="row">

                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h2>Create post</h2>
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
                                </div>
                                <hr style="width: 100%">
                                <h4 style="padding-bottom: 5px;">Course Price tier</h4>
                                <span>Please select the price tier for your course below and click 'Save'. The list price that students will see in other currencies is calculated using the price tier matrix, based on the tier that it corresponds to.
</span>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div style="padding-top: 20px; justify-content: space-between;">
                                            <div class="dropdown">
                                                <button style="padding-right: 5px;" class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">USD
                                                    <span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">HTML</a></li>
                                                    <li><a href="#">CSS</a></li>
                                                    <li><a href="#">JavaScript</a></li>
                                                </ul>

                                                <button style="margin-left: 5px;"class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Select
                                                    <span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">HTML</a></li>
                                                    <li><a href="#">CSS</a></li>
                                                    <li><a href="#">JavaScript</a></li>
                                                </ul>
                                                <button style="margin-left: 5px;" type="button" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="padding-top:10px;">
                                        <div></div>
                                        <span>Please select the price tier for your course below and click 'Save'. The list price that students will see in other currencies is calculated using the price tier matrix, based on the tier that it corresponds to.

                                    </div>
                                </div>
                                <h4>Course Coupons</h4>
                                <button type="button" class="btn btn-default">Create a New Coupon</button>




                            </div>
                            <div class="col-md-2" style="margin-left: 5px;">

                                <h2>Lorem ipsum lorem ipsum</h2>
                                <p style="font-size: 16px;">Whether you've been teaching for years or are teaching for the first time, you can make an engaging course. We've compiled resources and best practices to help you get to the next level, no matter where you're starting.</p>
                                <a href="#">View Details</a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>


        </div>

        <!-- side bar process end -->

    </div>
<?php include "../includes/layouts/footer.php"?>