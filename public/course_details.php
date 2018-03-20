<?php require_once("../includes/database/db_connection.php"); ?>
<?php require_once("../includes/php/session.php"); ?>
<?php require_once("../includes/php/functions.php"); ?>
<?php require_once "../includes/layouts/header2.php" ?>
<?php //confirm_logged_in(); ?>
<?php $content_id = get_selected_content_by_id();
if(isset($_SESSION['user_id'])){
    $found_user_enrollment = check_if_enrolled($_SESSION['user_id'],$content_id);
}else{
    $found_user_enrollment = false;
}

?>

<br><br>

<?php
    if($content_id){?>
        <?php
        $content_values = find_selected_content_by_id($content_id);
        $user_id = $content_values['user_id'];
        $content_details = $content_values['content_details'];

        $user_values = find_user_by_user_id($user_id);


        ?>

        <header>
            <div class="jumbotron" id="bgColor">
                <div class="container" id="fntColor">
                    <h1><?php echo htmlentities(mysqli_prep($content_values['content_title']));?></h1>

                    <div class="rating col-lg-12 col-md-1" id="rate">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"> <b style="color: #fff;font-weight: 600;">4.6 Ratings 9,324 enrolled</b></span>
<!--                        <div id="rateRight">-->
<!--                            <p>4.6 Ratings 9,324 enrolled</p>-->
<!--                        </div>-->
                    </div>
                    <div id="description">
<!--                        <p>Created by Jonas Schme Last updated 10/2017</p>-->
                        <p><?php echo "Created by ".htmlentities($user_values['firstname'])." "
                                .htmlentities($user_values['lastname'])."<br>"." Last Updated ".htmlentities($content_values['content_date']);?></p>
                        <i class="fa fa-clock-o" aria-hidden="true"> 10 Hrs</i>
                        <i class="fa fa-address-card" aria-hidden="true"> <?php echo htmlentities($content_values['content_level']) ?></i>
                        <i class="fa fa-cc" aria-hidden="true"> English</i>
                        <?php
                        if($found_user_enrollment == true){
                            ?>
                            <a href="course_view.php?content=<?php echo urlencode($content_id) ?>" style="float: right; width: 250px;" class="btn btn-success btn-lg">Go to Course</a>

                            <?php
                        }else{
                            ?>
                            <a href="../includes/php/enrolling_students.php?content=<?php echo urlencode($content_id) ?>" style="float: right; width: 250px;" class="btn btn-success btn-lg">Enroll</a>

                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </header>
        <br>
        <div class="container">
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h1 id="pad"> What will you learn?</h1>
                        <div class="col-lg-12">
                            <ul class="col-lg-6" id="left">
                                <li>
                                    <i class="fa fa-check"> <?php echo  nl2br($content_values['content_what_to_learn']);?></i>
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
                        <li><?php echo nl2br($content_values['content_requirements']);?>
                        </li>
                    </ol>
                </div>
                <div>
                    <h3>Description</h3>
                    <p><?php echo nl2br($content_values['content_details']);?></p><br>
                </div>
            </div>
        </section>





    <?php }else{?>

        <br>
            <p>Please Select a course</p>





    <?php } ?>



<br><br>
<div id="bdy">
    <span class="heading">User Rating</span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star"></span>
    <p>4.1 average based on 254 reviews.</p>
    <hr style="border:3px solid #f1f1f1">

    <div class="row">
        <div class="side">
            <div>5 star</div>
        </div>
        <div class="middle">
            <div class="bar-container">
                <div class="bar-5"></div>
            </div>
        </div>
        <div class="side right">
            <div>150</div>
        </div>
        <div class="side">
            <div>4 star</div>
        </div>
        <div class="middle">
            <div class="bar-container">
                <div class="bar-4"></div>
            </div>
        </div>
        <div class="side right">
            <div>63</div>
        </div>
        <div class="side">
            <div>3 star</div>
        </div>
        <div class="middle">
            <div class="bar-container">
                <div class="bar-3"></div>
            </div>
        </div>
        <div class="side right">
            <div>15</div>
        </div>
        <div class="side">
            <div>2 star</div>
        </div>
        <div class="middle">
            <div class="bar-container">
                <div class="bar-2"></div>
            </div>
        </div>
        <div class="side right">
            <div>6</div>
        </div>
        <div class="side">
            <div>1 star</div>
        </div>
        <div class="middle">
            <div class="bar-container">
                <div class="bar-1"></div>
            </div>
        </div>
        <div class="side right">
            <div>20</div>
        </div>
    </div>

</div>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<div class="footer-bottom">
    <div class="container-fluid">
        <h3>Follow US</h3>
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

                            <a href="#">Cool!! </a> | <a target="_blank" href="#">Web Design & Development by Team ASK</a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</div>


</body>
</html>