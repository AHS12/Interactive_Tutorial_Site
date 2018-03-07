<?php require_once("../includes/database/db_connection.php"); ?>
<?php require_once("../includes/php/functions.php"); ?>
<?php require_once("../includes/php/session.php"); ?>


<!DOCTYPE html>
<html>
<head>
    <title>Shekho</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shekho</title>
    <link rel="stylesheet" href="../lib/bootstrap.min.css">
    <link rel="stylesheet" href="../lib/fontAwesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../style/stylelish.css">
    <link rel="stylesheet" href="../lib/animate.min.css">
    <!-- FLEXSLIDER CSS -->
    <link rel="stylesheet" href="../style/flexslider.css">

    <script type="text/javascript">
        /**
         * Created by MD AZIZUL HAKIM on 30/01/2018.
         */

        function _(el) {
            return document.getElementById(el);
        }

        function uploadFile() {
            var file = _("file1").files[0];
            // alert(file.name+" | "+file.size+" | "+file.type);
            var formdata = new FormData();
            formdata.append("file1", file);
            var ajax = new XMLHttpRequest();
            ajax.upload.addEventListener("progress", progressHandler, false);
            ajax.addEventListener("load", completeHandler, false);
            ajax.addEventListener("error", errorHandler, false);
            ajax.addEventListener("abort", abortHandler, false);
            ajax.open("POST", "../includes/php/video_upload.php");
            ajax.send(formdata);
        }

        function progressHandler(event) {
//            _("loaded_n_total").innerHTML = "Uploaded " + event.loaded + " bytes of " + event.total;
            var percent = (event.loaded / event.total) * 100;
            _("progressBar").value = Math.round(percent);
            _("status").innerHTML = Math.round(percent) + "% uploaded... please wait";
        }

        function completeHandler(event) {
            _("status").innerHTML = event.target.responseText;
            _("progressBar").value = 0;
        }

        function errorHandler(event) {
            _("status").innerHTML = "Upload Failed";
        }

        function abortHandler(event) {
            _("status").innerHTML = "Upload Aborted";
        }

    </script>
</head>
<body>
<nav id="myNavbar" class="navbar navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header navbar-left">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#site-menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index2.php">Sheko</a>
        </div>
        <div class="collapse navbar-collapse" id="site-menu">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="course_list.php">COURSES</a></li>
                <li><a href="forum.php">FORUM</a></li>
                <li><a href="#contact">CONTACT</a></li>
                <?php
                $userrole = "";
                if (isset($_SESSION['userrole'])) {
                    $userrole = $_SESSION['userrole'];

                } ?>
                <?php if ((($userrole == "T") && isset($_SESSION['userfname']))) { ?>
                    <!--                    <li><a href="profile.php">--><?php //echo htmlentities($_SESSION["userfname"]); ?><!--</a></li>-->
                    <li><a href="create_course_landing.php">CREATE COURSE</a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                class="fa fa-user"> </i><?php echo " " . htmlentities($_SESSION["userfname"]); ?><b
                                class="caret"></b></a>
                        <ul class="dropdown-menu" style="background-color: #276b70;">
                            <li>
                                <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                            </li>
                            <li>
                                <a href="course_manage.php"><i class="fa fa-fw fa-edit"></i> Manage Course</a>
                            </li>
                            <li>
                                <a href="my_courses.php"><i class="fa fa-fw fa-book"></i> My Courses</a>
                            </li>
                            <li>
                                <a href="profile.php#profile_tab#settings"><i class="fa fa-fw fa-gear"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="../includes/php/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                <?php } else if (isset($_SESSION['userfname']) && ($userrole == "S")) { ?>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                class="fa fa-user"> </i><?php echo " " . htmlentities($_SESSION["userfname"]); ?><b
                                class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                            </li>

                            <li>
                                <a href="my_courses.php"><i class="fa fa-fw fa-book"></i> My Courses</a>
                            </li>

                            <li>
                                <a href="profile.php#profile_tab#settings"><i class="fa fa-fw fa-gear"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="../includes/php/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>

                <?php } else { ?>
                    <li><a href="login.php">LOGIN</a></li>

                    <li><a href="index2.php#joinPanel">REGISTER</a></li>
                <?php } ?>

            </ul>
        </div>
    </div>
</nav>
<!-- end of navigation -->


<!-- header start here -->
<div id="header" class="header">
    <div class="container">
        <!--<div class=" col-lg-6 col-sm-6 wow bounceInLeft">-->
        <!--<h1> Responsive Web Design</h1>-->
        <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>-->
        <!--<button class="btn btn-lg btn-primary">Buy Now</button>-->
        <!--<button class="btn btn-lg btn-success">View Detail</button>-->
        <!--</div>-->
        <!--<div class=" col-lg-6 col-sm-6 wow bounceInRight">-->
        <div class="hero" >
            <h1 class="wow bounceInDown" data-wow-delay=".6s">Are You Ready</h1>
            <div class="button">
                <a href="#" class="btn btn-one wow bounceInUp" data-wow-delay=".8">Join Now</a>
                <a href="#" class="btn btn-two wow bounceInUp" data-wow-delay=".9">Explore More</a>
            </div>
        </div>

    </div>
</div>
</div>
</div>
<!-- end header -->


<!-- new segment start here -->
<div id="new_segment" class="new_segment">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-2">
                        <i class="fa fa-check"></i>
                    </div>
                    <div class="col-md-10">
                        <b>Online courses</b>
                        <div class="sheko_course_tittle">Explore a variety of fresh topics</div>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-2">
                        <i class="fa fa-check"></i>
                    </div>
                    <div class="col-md-10">
                        <b>Expert instruction</b>
                        <div class="sheko_course_tittle">Find the right instructor for you</div>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-2">
                        <i class="fa fa-check"></i>
                    </div>
                    <div class="col-md-10">
                        <b>Lifetime access</b>
                        <div class="sheko_course_tittle">Learn on your schedule</div>
                    </div>

                </div>
            </div>

        </div>

    </div>

</div>
<!-- new segment end here -->





<!-- Services Start here  -->
<div id="services" class="services">
    <div class="container">
        <h2 class="wow fadeInUp">Services</h2>
        <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem Ipsum is a simply dummy text of the printing and typesetting dummy text.</p>
        <div class="row">
            <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="1.8s">
               <a href="#"> <i class="fa fa-desktop" aria-hidden="true"></i></a>
                <h4>Web Design</h4>
                <p>Lorem Ipsum is a simply dummy text of the printing and typesetting dummy text.</p>
            </div>
            <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="1.4s">
                <a href="#"> <i class="fa fa-mobile" aria-hidden="true"></i></a>
                <h4>Mobile App</h4>
                <p>Lorem Ipsum passages and more recently with publishing software.</p>
            </div>
            <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="0.8s">
                <a href="#"> <i class="fa fa-database" aria-hidden="true"></i></a>
                <h4>Database</h4>
                <p>Lorem Ipsum passages and more recently with publishing software.</p>
            </div>
            <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="0.4s">
                <a href="#"> <i class="fa fa-university" aria-hidden="true"></i></a>
                <h4>Consulting</h4>
                <p>Lorem Ipsum passages and more recently with publishing software.</p>
            </div>
        </div>
    </div>
</div>
<!--  end services -->
<!-- New segment of card -->
<div id="product_card" class="product_card">
    <div class="container">
        <h2>Top Courses in "Development"</h2>
        <div class="row fix">

            <?php
            $query = "SELECT * FROM content WHERE visibility = 1";
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
        </div>
    </div>

</div>

<!-- New segment of card end-->

<!-- End of pricing Secyion -->

<!-- join panel start here-->
<?php if(isset($_SESSION['userfname'])){?>

<?php}else { ?>
    <div id="joinPanel" class="joinPanel">
        <div class="row transparent">
            <div class="col-md-6">
                <div class="tuyin first" style="margin-left: 10px;">
                    <span class="title">Become an Instructor?</span>
                    <div class="text">
                        <div style="display: block;line-height: 1.65;padding:0 80px 20px;">Teach what you love. Sheko
                            gives you the tools to create an online course.
                        </div>
                    </div>
                    <a href="reg_teacher.php" class="btn btn-one wow bounceInUp" data-wow-delay=".9">Join Now</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="tuyin first">
                    <span class="title">Become a Learner</span>
                    <div class="text">
                        <div style="display: block;line-height: 1.65;padding:0 80px 20px;">Get unlimited access to 2,000
                            of Sheko top courses for your team.
                        </div>
                    </div>
                    <a href="reg_student.php" class="btn btn-one wow bounceInUp" data-wow-delay=".9">Join Now</a>
                </div>
            </div>
        </div>

    </div>
    <?php
}
?>

</div>
<!-- join panel end here-->
<!-- join panel end here-->
<!-- start of the Team section -->
<div id="team" class="team">
    <div class="container">
        <div class="row">
            <h2 class="wow fadeInUp">Meet Our team</h2>
            <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem Ipsum passages,and more recently with desktop publishing software</p>
            <div class="col-lg-4 col-md-4 wow fadeInLeft" data-wow-delay="2s">
                <img src="../style/pictures/mypic2.jpg" class="img-circle" alt="">
                <h4>Kawsar Ahmed</h4>
                <b>Co-Founder and Web Designer</b>
                <p>Lorem Ipsum passages and more recently with publishing software.</p>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
            </div>
            <div class="col-lg-4 col-md-4 wow fadeInLeft" data-wow-delay="1.6s">
                <img src="../style/pictures/sohel.jpg" class="img-circle" alt="">
                <h4>Md Sohle Mahmud</h4>
                <b>Co-Founder and PHP developer</b>
                <p>Lorem Ipsum passages and more recently with publishing software.</p>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
            </div>
            <div class="col-lg-4 col-md-4 wow fadeInLeft" data-wow-delay="1.2s">
                <img src="../style/pictures/aziz.jpg" class="img-circle" alt="">
                <h4>Md Azizul Hakim</h4>
                <b>Co-Founder and PHP developer</b>
                <p>Lorem Ipsum passages and more recently with publishing software.</p>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- end Team -->
<!-- client section start-->
<div id="client" class="clients">
    <div class="container">
        <div class="row">
            <h2 class="wow fadeInUp">Trusted By</h2>
            <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem Ipsum passages and more recently with publishing software.</p>
            <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="2s">
                <li><img src="../style/pictures/new1.jpg" alt=""></li>
            </div>
            <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="1.6s">
                <li><img src="../style/pictures/new1.jpg" alt=""></li>
            </div>
            <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="1.2s">
                <li><img src="../style/pictures/new1.jpg" alt=""></li>
            </div>
            <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="0.8s">
                <li><img src="../style/pictures/new1.jpg" alt=""></li>
            </div>
        </div>
    </div>
</div>
<!-- client section end-->



<!-- Contact section start-->
<div id="contact" class="contact">
    <div class="container">
        <div class="row">
            <h2 class="wow fadeInUp">Contact</h2>
            <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem Ipsum passages and more recently with publishing software.</p>
            <div class="col-lg-6 col-md-6">
                <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="0.8s">
                    <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" aria-describedby="sizing-addon1" placeholder="Full Name">
                </div>
                <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="1.2s">
                    <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" aria-describedby="sizing-addon1" placeholder="Email Adrress">
                </div>
                <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="1.6s">
                    <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-phone" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" aria-describedby="sizing-addon1" placeholder="Mobile Number">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="input-group wow fadeInUp" data-wow-delay="2s">
                    <textarea name="" id="" cols="80" rows="6" class="form-control"></textarea>

                </div>
                <button class="btn btn-lg wow fadeInUp" data-wow-delay="2.4s">Submit Your Message</button>
            </div>
        </div>
    </div>
</div>


<!-- contact section end-->

<!-- Timeline  section start here-->
<div></div>
<div class="container">
    <!-- slider -->
    <div class="row">
        <div class="col-md-9" id="slider">
            <!-- Top part of the slider -->
            <div class="row">
                <div class="col-md-2" id="carousel-bounding-box">
                    <div id="myCarousel" class="carousel slide">
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="active item" data-slide-number="0">
                                <img class="img-circle img-responsive" src="../style/pictures/mypic2.jpg">
                            </div>
                            <div class="item" data-slide-number="1">
                                <img class="img-circle img-responsive" src="../style/pictures/mypic2.jpg">
                            </div>
                            <div class="item" data-slide-number="2">
                                <img class="img-circle img-responsive" src="../style/pictures/mypic2.jpg">
                            </div>
                            <div class="item" data-slide-number="3">
                                <img class="img-circle img-responsive" src="../style/pictures/mypic2.jpg">
                            </div>
                            <div class="item" data-slide-number="4">
                                <img class="img-circle img-responsive" src="../style/pictures/mypic2.jpg">
                            </div>
                            <div class="item" data-slide-number="5">
                                <img class="img-circle img-responsive" src="../style/pictures/mypic2.jpg">
                            </div>
                        </div><!--/carousel-inner-->
                    </div><!--/carousel-->
                    <ul class="carousel-controls-mini list-inline text-center">
                        <li><a href="#" data-slide="prev"></a></li>
                        <li><a href="#" data-slide="next"></a></li>
                    </ul><!--/carousel-controls-->
                </div><!--/col-->
                <div class="col-md-4" id="carousel-text"></div>
                <div style="display:none;" id="slide-content">
                    <div id="slide-content-0">
                        <h5>Slide One</h5>

                        <p>This is mini slider / carousel.</p> <small>October 13 2013 - <a href="#">Read more</a></small>

                    </div>
                    <div id="slide-content-1">
                        <h5>Slide Two</h5>

                        <p>Mini carousel with Bootstrap</p> <small>October 15 2017 - <a href="#">Read more</a></small>

                    </div>
                    <div id="slide-content-2">
                        <h5>Slider Three</h5>

                        <p>Facebook-style paged image slider</p> <small>October 19 2017 - <a href="#">Read more</a></small>

                    </div>
                    <div id="slide-content-3">
                        <h5>Slider Four</h5>

                        <p>Lorem Ipsum Dolor</p> <small>October 22 2017 - <a href="#">Read more</a></small>

                    </div>
                    <div id="slide-content-4">
                        <h5>Slider Five</h5>

                        <p>Lorem Ipsum Dolor</p> <small>October 25 2017 - <a href="#">Read more</a></small>

                    </div>
                    <div id="slide-content-5">
                        <h5>Slider Six</h5>

                        <p>Lorem Ipsum Dolor</p>
                        <p class="sub-text">October 24 2017 - <a href="#">Read more</a>
                        </p>
                    </div>
                </div><!--/slide-content-->
            </div><!--/row-->
        </div><!--/col-->
    </div><!--/row slider-->
</div>

<!-- Timeline  section end here-->



<!-- Footer section start-->
<div id="footer" class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <h4>Contact Us</h4>
                <p><i class="fa fa-home" aria-hidden="true"> 86/2 2No.Road Dreamland R/A,4210</i></p>
                <p><i class="fa fa-envelope" aria-hidden="true"> Sheko@gmail.com</i></p>
                <p><i class="fa fa-phone" aria-hidden="true"> +8801256546666</i></p>
                <p><i class="fa fa-globe" aria-hidden="true"> www.sheko.com</i></p>
            </div>
            <div class="col-lg-4 col-md-4">
                <h4>About</h4>
                <p><i class="fa fa-square-o" aria-hidden="true"> About Us</i></p>
                <p><i class="fa fa-square-o" aria-hidden="true"> Privacy</i></p>
                <p><i class="fa fa-square-o" aria-hidden="true"> Terms & Condition</i></p>
            </div>

            <div class="col-lg-4 col-md-4">
                <h4>Get in Touch</h4>
                <i class="social fa fa-facebook" aria-hidden="true"></i>
                <i class="social fa fa-twitter" aria-hidden="true"></i>
                <i class="social fa fa-linkedin" aria-hidden="true"></i>
                <i class="social fa fa-pinterest" aria-hidden="true"></i>
                <i class="social fa fa-youtube" aria-hidden="true"></i>
                <i class="social fa fa-github" aria-hidden="true"></i><br>
                <input type="email" placeholder="Subscribe For Update"><button class="btn btn-success">Subscribe</button>
            </div>
        </div>
    </div>
</div>
<!-- Footer section end-->


<script src="../scripts/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<!-- jQuery library -->
<script src="../lib/jquery-3.2.1.min.js"></script>
<!-- Latest compiled JavaScript-->
<script src="../lib/bootstrap.min.js"></script>
<!--  Flexslider Scripts -->
<script src="../lib/jquery.flexslider.js"></script>

<script>
    $('#myCarousel').carousel({
        interval: 5000
    });

    $('#carousel-text').html($('#slide-content-0').html());

    // When the carousel slides, auto update the text
    $('#myCarousel').on('slid.bs.carousel', function (e) {
        var id = $('.item.active').data('slide-number');
        $('#carousel-text').html($('#slide-content-'+id).html());
    });
</script>



</body>
</html>