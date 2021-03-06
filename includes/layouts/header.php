<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->
    <title>Login and Registration Form with HTML5 and CSS3</title>
    <link rel="stylesheet" type="text/css" href="../lib/fontAwesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="../lib/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../style/main.css">
    <link rel="stylesheet" type="text/css" href="../style/profile.css">


</head>
<body>
<!-- ********** navbar start ************* -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header navbar-left">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#site-menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
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
                if(isset($_SESSION['userrole'])) {
                    $userrole = $_SESSION['userrole'];

                }?>
                <?php if((($userrole=="T") && isset($_SESSION['userfname']))){?>
                    <!--                    <li><a href="profile.php">--><?php //echo htmlentities($_SESSION["userfname"]); ?><!--</a></li>-->

                    <li><a href="create_course_landing.php">CREATE COURSE</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"> </i><?php echo " ". htmlentities($_SESSION["userfname"]);?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                            </li >
                            <li>
                                <a href="course_manage.php"><i class="fa fa-fw fa-edit"></i> Manage Course</a>
                            </li>
                            <li>
                                <a href="my_courses.php"><i class="fa fa-fw fa-book"></i> Enrolled Courses</a>
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
                <?php }else if(isset($_SESSION['userfname']) && $userrole=="S"){ ?>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"> </i><?php echo " ". htmlentities($_SESSION["userfname"]);?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                            </li>

                            <li>
                                <a href="my_courses.php"><i class="fa fa-fw fa-book"></i> Enrolled Courses</a>
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

                <?php }else{?>
                    <li><a href="login.php">LOGIN</a></li>

                    <li><a href="index2.php#join_pannel">REGISTER</a></li>
                <?php }?>

            </ul>
        </div>
    </div>

</nav>
