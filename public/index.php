<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WEB Page</title>

    <link rel="stylesheet" href="../style/lib/bootstrap.min.css">
    <link rel="stylesheet" href="../style/lib/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../style/main.css">


    <script>


        $('#largeShoes').on('shown.bs.modal', function () {
            $('#referencia').focus();
        })


    </script>


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
                <li><a href="login.php">Register</a>

        </div>
    </div>

    </div>
    </li>
    </ul>
    </div>
    </div>
</nav>
<section>
    <img id="size" src="../style/pictures/ipad.jpeg">
    <div class="centered">
        <h1>Learn Coding</h1>
        <hr>
        <button type="button" class="btn btn-primary">Join Now</button>
    </div>
</section>
<br><br>
<!-- **********navbar end *********** -->

<!-- ***********hero images ****** -->
<div class="hero-image">
    <div class="hero-text">
        <h1 style="font-size:50px">I am Kawsar Ahmed</h1>
        <p>Learn Coding With passion</p>
        <button>Get Started</button>
    </div>
</div>
<br><br>
<!-- ********** another segment ***** -->
<div class='split-pane col-xs-12 col-sm-6 uiux-side'>
    <div>
        <img src='http://bit.ly/BCR-design'>
        <div class='text-content'>
            <div>Become</div>
            <div class='big'>an Instructor?</div>
        </div>
        <button>
            Join Now
        </button>
    </div>
</div>
<div class='split-pane col-xs-12 col-sm-6 frontend-side'>
    <div>
        <img src='http://bit.ly/bcr-dev'>
        <div class='text-content'>
            <div>Become</div>
            <div class='big'>A learner?</div>
        </div>
        <a class='button'>
            Join Now
        </a>
    </div>
</div>
<!-- ********* another segment end ***** -->



<!-- **************our course boxes ************* -->
<div class="container-fluid">
    <div class="row">
        <div class="row">
            <div class="col-md-9">
                <h1 id="cobox">
                    Our Courses</h1>
                <hr id="koto">
            </div>
            <div class="col-md-3">
                <!-- Controls -->
                <div class="controls pull-right hidden-xs">
                    <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example"
                       data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success" href="#carousel-example"
                                                data-slide="next"></a>
                </div>
            </div>
        </div>
        <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="../style/pictures/android.jpeg" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                Sample Product</h5>
                                            <h5 class="price-text-color">
                                                $199.99</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Course details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="../style/pictures/android.jpeg" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                Product Example</h5>
                                            <h5 class="price-text-color">
                                                $249.99</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">course details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="../style/pictures/android.jpeg" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                Next Sample Product</h5>
                                            <h5 class="price-text-color">
                                                $149.99</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">course details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="../style/pictures/android.jpeg" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                Sample Product</h5>
                                            <h5 class="price-text-color">
                                                $199.99</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">course details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="../style/pictures/android.jpeg" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                Product with Variants</h5>
                                            <h5 class="price-text-color">
                                                $199.99</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">course details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="../style/pictures/android.jpeg" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                Grouped Product</h5>
                                            <h5 class="price-text-color">
                                                $249.99</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">course details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="../style/pictures/android.jpeg" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                Product with Variants</h5>
                                            <h5 class="price-text-color">
                                                $149.99</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">course details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="../style/pictures/android.jpeg" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                Product with Variants</h5>
                                            <h5 class="price-text-color">
                                                $199.99</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">course details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>

<!-- ********** our course end ****** -->
<!--popular courses start-->

<br><br>

<!--/popular courses end-->
<!-- our  profile  -->
<section id="mar">
    <blockquote>
        <h1>Meet Our team</h1>
    </blockquote>

    <hr>
    <br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="proCard">
                    <img src="../style/pictures/pjg.jpg" alt="Kawsar" style="width:100%">
                    <h1>Kawsar Ahmed</h1>
                    <p class="title">Designer & CO-Founder</p>
                    <p>International Islamic University</p>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <p id="new"><button class="hb" id="color">Contact</button></p>
                </div>
            </div>


            <div class="col-lg-4">
                <div class="proCard">
                    <img src="../style/pictures/pjg.jpg" alt="Kawsar" style="width:100%">
                    <h1>Kawsar Ahmed</h1>
                    <p class="title">Designer & CO-Founder</p>
                    <p>International Islamic University</p>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <p id="new"><button class="hb" id="color">Contact</button></p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="proCard">
                    <img src="../style/pictures/pjg.jpg" alt="Kawsar" style="width:100%">
                    <h1>Kawsar Ahmed</h1>
                    <p class="title">Designer & CO-Founder</p>
                    <p>International Islamic University</p>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <p id="new"><button class="hb" id="color">Contact</button></p>
                </div>
            </div>

        </div>
    </div>
</section>
<br><br>


<!-- profile end -->

<!-- ****************what contact us************** start -->

<section id="contact">
    <div class="section-content">
        <h1 class="section-header">Get in <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Touch with us</span></h1>
        <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h3>
    </div>
    <div class="contact-section">
        <div class="container-fluid">
            <form>
                <div class="col-md-6 form-line">
                    <div class="form-group">
                        <label for="exampleInputUsername">Your name</label>
                        <input type="text" class="form-control" id="" placeholder=" Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Email Address</label>
                        <input type="email" class="form-control" id="exampleInputEmail" placeholder=" Enter Email id">
                    </div>
                    <div class="form-group">
                        <label for="telephone">Mobile No.</label>
                        <input type="tel" class="form-control" id="telephone" placeholder=" Enter 10-digit mobile no.">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for ="description"> Message</label>
                        <textarea  class="form-control" id="description" placeholder="Enter Your Message"></textarea>
                    </div>
                    <div>

                        <button type="button" class="btn btn-default submit btn-responsive"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</section>
<br><br>
<div class="clear"></div>
<!-- ****************what contact us************** start -->


<!--************************* foooter***********************8 -->

<div class="footer-bottom">
    <div class="container-fluid">
        <h3>Follow US</h3>
        <!--<hr> -->
        <div class="text-center center-block">
            <!-- <p class="txt-railway">- Bootsnipp.com -</p> -->
            <!-- <br /> -->
            <a href="https://www.facebook.com/bootsnipp"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
            <a href="https://twitter.com/bootsnipp"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
            <a href="https://plus.google.com/+Bootsnipp-page"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
            <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
        </div>
        <!--<hr> -->
        <div class="bottom">

            <div class="container">

                <div class="row">

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                        <div class="copyright">

                            © 2017, Sheko, All rights reserved

                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                        <div class="design">

                            <a href="#">Franchisee </a> |  <a target="_blank" href="#">Web Design & Development by Sheko</a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</div>















<!-- Latest compiled and minified JavaScript
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.appear.js"></script>
-->
<script type="text/javascript" src="../scripts/another.js"></script>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script >
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

    // Initialize popover component
    $(function () {
        $('[data-toggle="popover"]').popover()
    })
</script>

</body>
</html>