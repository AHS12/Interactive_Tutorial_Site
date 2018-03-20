<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Card</title>
    <link rel="stylesheet" href="../lib/bootstrap.min.css">
    <link rel="stylesheet" href="../lib/fontAwesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">


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



<body>
<!-- ********** navbar ************* -->
<nav class="navbar navbar-fixed-top">
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
                        <ul class="dropdown-menu">
                            <li>
                                <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                            </li>
                            <li>
                                <a href="inbox.php"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                            </li>
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
                                <a href="inbox.php"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
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

                <?php } else { ?>
                    <li><a href="login.php">LOGIN</a></li>

                    <li><a href="index2.php#join_pannel">REGISTER</a></li>
                <?php } ?>

            </ul>
        </div>
    </div>

</nav>
