<?php require_once("../includes/php/functions.php"); ?>
<?php require_once("../includes/php/session.php"); ?>
<?php require_once "../includes/layouts/header2.php" ?>
<br>
<hr>
<div class="container">

    <div class="panel panel-default" style="margin-top: 5px;height: 150px;">
        <div class="panel-body" style="margin-top: 15px;">
            <div class="row">
                <div class="col-xs-4">
                    <i style="padding-left: 10px;" class="fa fa-book fa-5x" aria-hidden="true"></i>
                </div>
                <div class="col-xs-4">
                    <h1 style="font-size: 20px;">Jump Into Course Creation</h1>
                </div>
                <div class="col-xs-4">
                    <a href="create_course.php">
                        <button style="float: right; padding-left: 30px;" type="button" class="btn btn-primary">Create Your Course</button>
                    </a>
                </div>
            </div>

        </div>
        <br>

    </div>
    <div class="panel panel-default" style="margin-top: 10px;height: 350px;">
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-5 ">
                    <img src="../style/pictures/dash_video_illustration.png" class="img-rounded" id="Panel_Image" style="width:200px;height: 200px;padding-top: 5px;">

                </div>
                <div class="col-xs-7">
                    <h2>Get Started with Video</h2>
                    <p>We've put together a library of resources to help you make great course videos. With video lectures, you can share your knowledge with students around the world in the most engaging way.</p>
                    <a href="#">View Details</a>
                </div>

            </div>

        </div>

    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default" style="margin-top: 10px;height: 300px;">
                <div class="panel-body" style="margin-top: 15px;">
                    <div class="row">
                        <div class="col-xs-5">
                            <img src="../style/pictures/dash_course_illustration.png" class="img-rounded" id="Panel_Image" style="width:100px;height: 100px;padding-top: 5px;">
                        </div>
                        <div class="col-xs-7">
                            <h4>Create an Engaging Course</h4>
                            <p>Learn how to build the most compelling course for your students. Review our best practices.</p>
                            <a href="#">get started</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default" style="margin-top: 10px;height: 300px;">
                <div class="panel-body" style="margin-top: 15px;">
                    <div class="row">
                        <div class="col-xs-5">
                            <img src="../style/pictures/dash_publish_illustration.png" class="img-rounded" id="Panel_Image" style="width:100px;height: 100px;padding-top: 5px;">
                        </div>
                        <div class="col-xs-7">
                            <h4>Build Your Audience</h4>
                            <p>Set your course up for success by building your audience.
                            </p>
                            <a href="#">get started</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>


</div>

<?php require_once ("../includes/layouts/footer.php");?>
