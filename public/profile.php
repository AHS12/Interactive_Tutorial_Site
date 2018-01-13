<?php
@ob_start();
if (session_status() != PHP_SESSION_ACTIVE) session_start();
?>


<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>

    <link rel="stylesheet" href="../lib/bootstrap.min.css">
    <link rel="stylesheet" href="../lib/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../style/profile.css">
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
                <li><a href="../includes/php/logout.php">LOGOUT</a></li>
            </ul>
        </div>
    </div>
</nav>
<br><br>
<!-- ********** navbar end************* -->
<!-- ************profile navbar start ******* -->
<!-- apatoto khali pore add kore nibo********* -->
<!-- ************profile navbar stop*********** -->
<hr>
<div class="container bootstrap snippet">
    <div class="row">
        <!--        <div class="col-sm-3"><!--left col-->

        <!--            <ul class="list-group">-->
        <!--                <li class="list-group-item text-muted">Profile</li>-->
        <!--                <li class="list-group-item text-right"><span class="pull-left"><strong>Full Name</strong></span></li>-->
        <!--                <li class="list-group-item text-right"><span class="pull-left"><strong>Address</strong></span></li>-->
        <!--                <li class="list-group-item text-right"><span class="pull-left"><strong>Telephone</strong></span></li>-->
        <!---->
        <!--            </ul>-->

        <!--
        <ul class="list-group">
          <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
          <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125</li>
          <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
          <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
          <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>
        </ul>

        <div class="panel panel-default">
          <div class="panel-heading">Social Media</div>
          <div class="panel-body">
              <i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
          </div>
        </div>
    -->

        <!--        </div><!--/col-3-->
        <div>

            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
                <li><a href="#messages" data-toggle="tab">Course taken</a></li>
                <li><a href="#settings" data-toggle="tab">Setting</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="home">

                    <hr>
                    <!-- ******HEADER****** -->
                    <header class="header">
                        <div class="container">
                            <div class="teacher-name" style="padding-top:20px;">
                                <div class="row" style="margin-top:0px;">
                                    <div class="col-md-9">
                                        <h2 style="font-size:38px">
                                            <strong><?php echo $_SESSION['userfname'] . " " . $_SESSION['userlname'];
                                                ?></strong>
                                        </h2>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="margin-top:20px;">
                                <div class="col-md-3"> <!-- Image -->
                                    <a href="#"> <img class="rounded-circle"
                                                      src="../images/<?php echo $_SESSION['userpicture'] ?>"
                                                      alt="profilePicture"
                                                      style="width:200px;height:200px"></a>
                                </div>

                                <div class="col-md-6"> <!-- Rank & Qualifications -->
                                    <h5 style="color:#3AAA64">
                                        <strong>

                                            <?php
                                            if (isset($_SESSION['userinstitute'])) {
                                                echo $_SESSION['userinstitute'];
                                            } else echo "No Institution";
                                            ?>
                                        </strong>
                                    </h5>
                                </div>
                                <br><br>

                                <div class="col-md-6 text-center"> <!-- Phone & Social -->
                                    <span class="number"
                                          style="font-size:18px">Email :<strong><?php echo $_SESSION['usermail'] ?></strong></span>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!--End of Header-->

                    <!-- Main container -->
                    <div class="container" id="bio">

                        <!-- Section:Biography -->
                        <div class="row">
                            <div class="col-md-9">
                                <div class="card card-block text-xs-left">
                                    <h2 class="card-title" style="color:#009688"><i class="fa fa-user fa-fw"></i>Biography
                                    </h2>
                                    <div style="height: 15px"></div>
                                    <p>
                                        <?php
                                        if (isset($_SESSION['userbio'])) {
                                            echo $_SESSION['userbio'];
                                        } else echo "No bio added yet";

                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End:Biography -->

                        <!-- Later PHP dia populate kora hobe -->
                        <!--Section:Interests-->
                        <!--                        <div class="row">-->
                        <!--                            <div class="col-md-9">-->
                        <!--                                <div class="card card-block">-->
                        <!--                                    <h2 class="card-title" style="color:#009688"><i class="fa fa-rocket fa-fw"></i>Interests-->
                        <!--                                    </h2>-->
                        <!--                                    <ul class="list-group" style="margin-top:15px;margin-bottom:15px;">-->
                        <!--                                        <li class="list-group-item">Cloud & Parallel Computing</li>-->
                        <!--                                        <li class="list-group-item">Big Data Analysis and Management</li>-->
                        <!--                                        <li class="list-group-item">High-performance and Low-Power Real-Time Systems-->
                        <!--                                        </li>-->
                        <!--                                        <li class="list-group-item">Mobile Embedded Systems and Network Security</li>-->
                        <!--                                    </ul>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                        <!-- End :Interests -->


                    </div> <!--End of Container-->

                </div><!--/tab-pane-->
                <div class="tab-pane" id="messages">

                    <h2></h2>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="proCard">
                                    <img src="../style/pictures/pjg.jpg" alt="Kawsar">
                                    <h5>Course Name</h5>
                                    <p class="title">Course Tittle</p>
                                    <hr>
                                    <p id="new">
                                        <button class="hb" id="color">Start Course</button>
                                    </p>
                                </div>
                            </div>


                            <div class="col-lg-4">
                                <div class="proCard">
                                    <img src="../style/pictures/pjg.jpg" alt="Kawsar">
                                    <h5>Course Name</h5>
                                    <p class="title">Course Tittle</p>
                                    <hr>
                                    <p id="new">
                                        <button class="hb" id="color">Start Course</button>
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="proCard">
                                    <img src="../style/pictures/pjg.jpg" alt="Kawsar">
                                    <h5>Course Name</h5>
                                    <p class="title">Course Tittle</p>
                                    <hr>
                                    <p id="new">
                                        <button class="hb" id="color">Start Course</button>
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="proCard">
                                    <img src="../style/pictures/pjg.jpg" alt="Kawsar">
                                    <h5>Course Name</h5>
                                    <p class="title">Course Tittle</p>
                                    <hr>
                                    <p id="new">
                                        <button class="hb" id="color">Start Course</button>
                                    </p>
                                </div>
                            </div>


                            <div class="col-lg-4">
                                <div class="proCard">
                                    <img src="../style/pictures/pjg.jpg" alt="Kawsar">
                                    <h5>Course Name</h5>
                                    <p class="title">Course Tittle</p>
                                    <hr>
                                    <p id="new">
                                        <button class="hb" id="color">Start Course</button>
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="proCard">
                                    <img src="../style/pictures/pjg.jpg" alt="Kawsar">
                                    <h5>Course Name</h5>
                                    <p class="title">Course Tittle</p>
                                    <hr>
                                    <p id="new">
                                        <button class="hb" id="color">Start Course</button>
                                    </p>
                                </div>
                            </div>


                        </div>
                    </div>

                </div><!--/tab-pane-->
                <div class="tab-pane" id="settings">


                    <hr>
                    <form class="form" action="../includes/php/updateprofile.php" method="post"
                          enctype="multipart/form-data" id="registrationForm">
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="first_name"><h4>First name</h4></label>
                                <input type="text" class="form-control" name="first_name" id="first_name"
                                       value="<?php echo $_SESSION['userfname'] ?>">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="last_name"><h4>Last name</h4></label>
                                <input type="text" class="form-control" name="last_name" id="last_name"
                                       value="<?php echo $_SESSION['userlname'] ?>">
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="email"><h4>Email</h4></label>
                                <input type="email" class="form-control" name="email" id="email"
                                       value="<?php echo $_SESSION['usermail'] ?>">
                            </div>
                        </div>


                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="Institution"><h4>Institution</h4></label>
                                <input type="text" class="form-control" name="institution" id="Institution"
                                       value="<?php echo $_SESSION['userinstitute'] ?>">
                            </div>
                        </div>

                        <br>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="bio"><h4>Bio</h4></label>
                                <input type="text" class="form-control" name="bio" id="bio"
                                       value="<?php echo $_SESSION['userbio'] ?>">
                            </div>
                        </div>

                        <br>

                        <div>

                            <!--    for preview Image-->

                            <script type="text/javascript">
                                function readURL(input) {
                                    if (input.files && input.files[0]) {
                                        var reader = new FileReader();

                                        reader.onload = function (e) {
                                            $('#preview').attr('src', e.target.result);
                                        };

                                        reader.readAsDataURL(input.files[0]);
                                    }
                                }
                            </script>

                            <div>
                                <label for="img"><h4>Picture</h4></label>
                                <input class="btn btn-info" type="file" id="img" name="image" onchange="readURL(this)">
                                <br>
                                <img width="240" height="240" id="preview" src="#" alt=""> <br>
                            </div>


                        </div>


                        <div class="form-group">
                            <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" name="update_user" type="submit">Update

                            </div>
                        </div>
                    </form>
                </div>

            </div><!--/tab-pane-->
        </div><!--/tab-content-->

    </div><!--/col-9-->
</div><!--/row-->

<br>
<br>
<!-- jQuery library -->
<script src="../lib/jquery-3.2.1.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="../lib/bootstrap.min.js"></script>

</body>
</html>