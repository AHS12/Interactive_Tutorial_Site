
<?php require_once "../includes/layouts/header2.php" ?>
<?php
//teacher_logged_in();
//?>
<!--<br>-->
<!--<br>-->
<!--<br>-->
<?php
//if (isset($_POST['submit'])) {
//
//    $timestamp = time();
//    $content_date = strftime("%Y-%m-%d", $timestamp);
//
//    $user_id = $_SESSION['user_id'];
//    $content_title = mysqli_prep($_POST['content_title']);
//    $content_category = "Android";
//    $content_level = "Beginner";
//    $content_requirements = " ";
//    $content_what_to_learn = " ";
//    $content_details = " ";
//    $content_tags = " ";
//    $content_picture = "test_image5.jpg";
//    $visibility = 0;
//
//    $required_fields = array("content_title");
//    validate_presences($required_fields);
//
////    if (!empty($errors)) {
////        $_SESSION["errors"] = $errors;
////        redirect_to("create_course_title.php");
////    }
//        $query = "INSERT INTO content(user_id, content_title, content_what_to_learn, content_details, content_requirements, content_picture, content_date, content_category, content_tags, content_level, visibility) VALUES (";
//        $query .= "'{$user_id}', '{$content_title}', '{$content_what_to_learn}', '{$content_details}', '{$content_requirements}', '{$content_picture}', '{$content_date}', '{$content_category}', '{$content_tags}', '{$content_level}', '{$visibility}')";
//        //this is famous technique used by dev so i can use if else(true) to apply any of them when it needed
//        $result = mysqli_query($connection, $query);
//
//        //test if any error occurs
////        if (isset($result)) {
////
////            redirect_to("create_course_landing.php");
////        } else {
////            //failure
////            $_SESSION["message"] = "Course creation failed";
////            die("database query failed!! " . mysqli_error($connection));
////
////        }
//        header("location: create_course_landing.php");
//
//}
//?>
<!---->
<?php
//echo message(); //session message for successful form submission or not
//?>
<?php
//$errors = errors();  //session error
//echo form_errors($errors);
//?>

<br>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h2>Create A New Course</h2>
            <div class="panel panel-default" style="width: 600px;height: 250px;">
                <div class="panel-heading"><h4>Lets Gets Started</h4></div>
                <div class="panel-body">
                    <form action="../includes/php/create_course_name.php" method="post">
                        <div class="form-group">

                            <label for="content_title">All you need to do is enter a working title:</label>
                            <input type="text" class="form-control" name="content_title" required/>
                            <br>
                            <input style="float: right; margin-bottom: 10px" type="submit" name="submit"
                                   value="Save & Go" class="btn btn-success btn-lg">
                            <br>
                        </div>
                    </form>

                </div>

            </div>
        </div>

    </div>

</div>
<?php include "../includes/layouts/footer.php"?>