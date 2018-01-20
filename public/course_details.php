
<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <title>WEB Page</title>-->
<!---->
<!--    <link rel="stylesheet" href="../lib/bootstrap.min.css">-->
<!--    <link rel="stylesheet" href="../lib/font-awesome.min.css">-->
<!--    <link rel="stylesheet" type="text/css" href="../style/style.css">-->
<!---->
<!--</head>-->
<!--<body>-->
<!--<!-- ********** navbar ************* -->-->
<!--<nav class="navbar navbar-default navbar-fixed-top">-->
<!--    <div class="container">-->
<!--        <div class="navbar-header navbar-left">-->
<!--            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#site-menu">-->
<!--                <span class="icon-bar"></span>-->
<!--                <span class="icon-bar"></span>-->
<!--                <span class="icon-bar"></span>-->
<!--            </button>-->
<!--            <a class="navbar-brand" href="#">Sheko</a>-->
<!--        </div>-->
<!--        <div class="collapse navbar-collapse" id="site-menu">-->
<!--            <ul class="nav navbar-nav navbar-right">-->
<!--                <li><a href="index.php">HOME</a></li>-->
<!--                <li><a href="tutorial.html">TUTORIAL</a></li>-->
<!--                <li><a href="#skills">SKILLS</a></li>-->
<!--                <li><a href="#services">SERVICES</a></li>-->
<!--                <li><a href="#portfolio">PORTFOLIO</a></li>-->
<!--                <li><a href="#contact">CONTACT</a></li>-->
<!--                <li><a href="index.php#join_pannel">REGISTER</a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--</nav>-->
<?php require_once("../includes/database/db_connection.php"); ?>
<?php require_once("../includes/php/session.php"); ?>
<?php require_once("../includes/php/functions.php"); ?>
<?php require_once "../includes/layouts/header2.php" ?>
<?php $content_id = get_selected_content_by_id();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WEB Page</title>

    <link rel="stylesheet" href="../lib/bootstrap.min.css">
    <link rel="stylesheet" href="../lib/fontAwesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../style/style.css">

</head>
<body>
<!-- ********** navbar ************* -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header navbar-left">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#site-menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Sheko</a>
        </div>
        <div class="collapse navbar-collapse" id="site-menu">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">HOME</a></li>
                <li><a href="tutorial.html">TUTORIAL</a></li>
                <li><a href="#skills">SKILLS</a></li>
                <li><a href="#services">SERVICES</a></li>
                <li><a href="#portfolio">PORTFOLIO</a></li>
                <li><a href="#contact">CONTACT</a></li>
                <li><a href="index.php#join_pannel">REGISTER</a></li>
            </ul>
        </div>
    </div>

  </nav>

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
                        <span class="fa fa-star"></span>
                        <div id="rateRight">
                            <p>4.6 Ratings 9,324 enrolled</p>
                        </div>

                    </div>
                    <div id="description">
<!--                        <p>Created by Jonas Schme Last updated 10/2017</p>-->
                        <p><?php echo "Created by ".htmlentities($user_values['firstname'])." "
                                .htmlentities($user_values['lastname'])."<br>"." Last Updated ".htmlentities($content_values['content_date']);?></p>
                        <i class="fa fa-clock-o" aria-hidden="true"> 10 Hrs</i>
                        <i class="fa fa-address-card" aria-hidden="true"> <?php echo htmlentities($content_values['content_level']) ?></i>
                        <i class="fa fa-cc" aria-hidden="true"> English</i>
                        <a href="#" style="float: right; width: 250px;" class="btn btn-success btn-lg">Enroll</a>
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

<!--                                <li>-->
<!--                                    <i class="fa fa-check"> This is awesome tutorial site huge resourse to learn-->
<!--                                        coding.Interface is really rich.</i>-->
<!--                                </li>-->
<!---->
<!--                                <li>-->
<!--                                    <i class="fa fa-check"> This is awesome tutorial site huge resourse to learn-->
<!--                                        coding.Interface is really rich.</i>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <i class="fa fa-check"> This is awesome tutorial site huge resourse to learn-->
<!--                                        coding.Interface is really rich.</i>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <i class="fa fa-check"> This is awesome tutorial site huge resourse to learn-->
<!--                                        coding.Interface is really rich.</i>-->
<!--                                </li>-->
                            </ul>


<!--                            <ul class="col-lg-6" id="onno">-->
<!--                                <li>-->
<!--                                    <i class="fa fa-check"> This is awesome tutorial site huge resourse to learn-->
<!--                                        coding.Interface is really rich.</i>-->
<!--                                </li>-->
<!---->
<!--                                <li>-->
<!--                                    <i class="fa fa-check"> This is awesome tutorial site huge resourse to learn-->
<!--                                        coding.Interface is really rich.</i>-->
<!--                                </li>-->
<!---->
<!--                                <li>-->
<!--                                    <i class="fa fa-check"> This is awesome tutorial site huge resourse to learn-->
<!--                                        coding.Interface is really rich.</i>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <i class="fa fa-check"> This is awesome tutorial site huge resourse to learn-->
<!--                                        coding.Interface is really rich.</i>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <i class="fa fa-check"> This is awesome tutorial site huge resourse to learn-->
<!--                                        coding.Interface is really rich.</i>-->
<!--                                </li>-->
<!--                            </ul>-->
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