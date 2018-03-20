<?php require_once("../includes/database/db_connection.php"); ?>
<?php require_once("../includes/php/session.php"); ?>
<?php require_once("../includes/php/functions.php"); ?>
<?php require_once "../includes/layouts/header2.php" ?>

<?php confirm_logged_in() ?>
<!-- **********navbar end *********** -->

<hr style="width: 100%">
<!--<hr style="width: 100%">-->

<!-- ********** navbar ************* -->

<!-- **********navbar end *********** -->
<br><br>

<!-- **************** course content start ********-->
<!-- **************** course content start ********-->
<div class="container">
    <h1>My Courses </h1>
    <hr>
    <div class="row fix">

        <?php

        $current_user_id = $_SESSION['user_id'];
        $query_content = "SELECT content_id FROM content_enrolled WHERE user_id = '$current_user_id'";
        $result = mysqli_query($connection, $query_content);
//        $content_list = mysqli_fetch_assoc($result);
//        $row = $content_list;

        while ($content_list = mysqli_fetch_assoc($result)) {
            $content_id = $content_list['content_id'];

            $query = "SELECT * FROM content WHERE visibility = 1 AND content_id ='$content_id' ";
            $select_all_content = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($select_all_content)) {
                $content_id = $row['content_id'];
                $user_id = $row['user_id'];
                $content_title = $row['content_title'];
                $content_picture = $row['content_picture'];
                $content_date = $row['content_date'];
                $content_category = $row['content_category'];

                $user = mysqli_fetch_assoc(find_selected_user_by_id($user_id));
                $user_firstname = $user['firstname'];
                $user_lastname = $user['lastname'];
                ?>

                <div class="col-md-3 wow flipInY">
                    <div class="card">
                        <div class="card-img">
                            <img class="img-responsive" src="../images/<?php echo $content_picture;?>">
                        </div>
                        <div class="card-block">
                            <div class="card-title">
                                <small><?php echo $content_category?></small>
                                <h4><?php echo $content_title;?></h4>
                                <p><?php echo "{$user_firstname} " . "{$user_lastname}"; ?></p>
                            </div>
                            <div class="card-footer">

                                <ul class="list-inline">
                                    <li class="margin-t-10"><a href="course_details.php?content=<?php echo urlencode($content_id) ?>">
                                            <i class="fa fa-list"></i> View Course Details</a></li>


                                </ul>
                            </div>

                        </div>

                    </div>
                </div>

                <?php
            }


            ?>
            <?php
        }
        ?>


    </div>


</div>
<!-- **********course content end************ -->
<!-- **********course content end************ -->
<script type="text/javascript" src="js/another.js"></script>

<!-- jQuery library -->
<script src="../lib/jquery-3.2.1.min.js"></script>
<!-- Latest compiled JavaScript-->
<script src="../lib/bootstrap.min.js"></script>

<br>
<hr>
<div class="footer-bottom">
    <div class="container-fluid">

        <!--<hr> -->
        <div class="text-center center-block">
            <!-- <p class="txt-railway">- Bootsnipp.com -</p> -->
            <!-- <br /> -->
            <a href="https://www.facebook.com/bootsnipp"><i id="social-fb"
                                                            class="fa fa-facebook-square fa-3x social"></i></a>
            <a href="https://twitter.com/bootsnipp"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
            <a href="https://plus.google.com/+Bootsnipp-page"><i id="social-gp"
                                                                 class="fa fa-google-plus-square fa-3x social"></i></a>
            <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
        </div>
        <!--<hr> -->
        <div class="bottom">

            <div class="container">

                <div class="row">

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                        <div class="copyright">

                            © 2017, All rights reserved

                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                        <div class="design">

                            <a href="#">Cool!! </a> | <a target="_blank" href="#">Web Design & Development by Team
                                ASK</a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</div>

</body>
</html>