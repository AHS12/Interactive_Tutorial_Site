<?php require_once ("../includes/database/db_connection.php")?>
<?php require_once ("../includes/php/functions.php")?>
<?php require_once ("../includes/php/session.php")?>
<?php include "../includes/layouts/header2.php" ?>
<?php
teacher_logged_in();
?>
<?php
if(isset($_POST['submit'])){
    $fileUserImgName = "test_image5.jpg";
    $content_id = $_SESSION['content_id'];
    $content_title = mysqli_prep($_POST['content_title']);
    $content_category = mysqli_prep($_POST['content_category']);
    $content_level = mysqli_prep($_POST['content_level']);
    $content_requirements = mysqli_prep($_POST['content_requirements']);
    $content_what_to_learn = mysqli_prep($_POST['content_what_to_learn']);
    $content_details = mysqli_prep($_POST['content_details']);
    $content_tags = mysqli_prep($_POST['content_tags']);

    //process image

    if(isset($_FILES['image'])){
        $fileTmp = $_FILES['image']['tmp_name']; //Temporary location Of File
        $fileUserImgName = time() . $_FILES['image']['name'];
        $fileType = $_FILES['image']['type'];
        $filePath = "../images/" . $fileUserImgName;

        $fileSize = getimagesize($fileTmp);


        if ($fileSize != false) {


            if (($fileType != "image/jpeg" && $fileType != "image/png") && $fileType != "image/gif") {

                $_SESSION['wrong_image_formate'] = 1;
                header("location: ../../public/create_course.php");

            } else {


                move_uploaded_file($fileTmp, $filePath);

            }
        } else {
            $_SESSION['no_image'] = 1;
            header("location: ../../public/create_course.php");
        }
    }

    $query  = "UPDATE content SET ";
    $query .= "content_title = '{$content_title}', ";
    $query .= "content_what_to_learn = '{$content_what_to_learn}', ";
    $query .= "content_details = '{$content_details}', ";
    $query .= "content_requirements = '{$content_requirements}', ";
    $query .= "content_picture = '{$fileUserImgName}', ";
    $query .= "content_category = '{$content_category}', ";
    $query .= "content_tags = '{$content_tags}', ";
    $query .= "content_level = '{$content_level}' ";
    $query .= "WHERE content_id = {$content_id} ";
    $query .= "LIMIT 1";
    //this is famous technique used by dev so i can use if else(true) to apply any of them when it needed
    $result = mysqli_query($connection,$query);
    if(!$result){
        die("query failed".mysqli_error($connection));
    }

}
?>
<?php require_once ("../includes/php/create_course_data.php")?>

<div class="container">
    <?php include ("../includes/layouts/create_course_header.php");?>
    <hr>

    <!-- side bar processs start -->
    <div class="container" style="margin-left: 0;">
        <div class="col-sm-2">
            <?php include "../includes/layouts/create_course_nav.php"?>
            <!-- <div><h2 class="add">Place for your add!</h2></div> -->
        </div>
        <!-- tab content -->
        <div class="tab-content" style="background: #fff;">
            <div class="tab-pane active text-style" id="tab1">
                <div class="container">
                    <div class="row">

                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2>Create post</h2>
                                    <?php




                                    ?>

                                </div>
                            </div>
                            <hr style="width: 100%">


                            <form action="create_course.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="content_title"> Course Title <span class="require">*</span></label>
                                    <input type="text" class="form-control" name="content_title" value="<?php echo htmlentities($content_title) ?>" />
                                    <br>

                                    <label for="content_category"> Course Category <span class="require">*</span></label>
                                    <select class="form-control" id="availability" name="content_category">
                                        <option value="Android">Android</option>
                                        <option value="PHP">PHP</option>
                                        <option value="Javascript">Javascript</option>

                                    </select>
                                    <br>

                                    <label for="content_level">Course Level <span class="require">*</span></label>
                                    <select class="form-control" id="availability" name="content_level">
                                        <option value="Beginner">Beginner</option>
                                        <option value="Intermediate">Intermediate</option>
                                        <option value="Advanced">Advanced</option>

                                    </select>
                                    <br>

                                    <label for="content_requirements">Course Requirement</label>
                                    <textarea rows="5" class="form-control" name="content_requirements"><?php echo $content_requirements ?></textarea>
                                    <br>

                                    <label for="content_what_to_learn">What Will I learn?</label>
                                    <textarea rows="5" class="form-control" name="content_what_to_learn" ><?php echo $content_what_to_learn ?></textarea>
                                    <br>

                                    <label for="content_details">Course Description</label>
                                    <textarea rows="5" class="form-control" name="content_details" ><?php echo $content_details ?></textarea>
                                    <br>

                                    <label for="content_tags"> Course Tags <span class="require">*</span></label>
                                    <input type="text" class="form-control" name="content_tags" value="<?php echo htmlentities($content_tags) ?>" />
                                    <br>

                                    <p>

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

                                        <input type="file" name="image" onchange="readURL(this)"> <br>
                                        <img width="240" height="240" id="preview" src="#" alt=""> <br>

                                    </p>

                                    <input style="float: right; margin-bottom: 10px" type="submit" name="submit" class="btn btn-success btn-lg" value="Save">
                                    <br>
                                </div>


                            </form>


                        </div>
                        <div class="col-md-2" style="margin-left: 5px;">

                            <h3>Helpful Tips</h3>
                            <p style="font-size:16px;">Whether you've been teaching for years or are teaching for the first time, you can make an engaging course. We've compiled resources and best practices to help you get to the next level, no matter where you're starting.</p>

                        </div>

                    </div>
                </div>
            </div>
            <!-- <div class="tab-pane text-style" id="tab2">
              <h2>Dolor asit amet</h2>
               <p>Dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
                et dolore magna aliquyam erat, sed diam voluptua.</p>
                <hr>
                      <img src="http://placehold.it/150x90" class="img-rounded pull-left">
            </div>
            <div class="tab-pane text-style" id="tab3">
              <h2>Stet clita</h2>
              <p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Duis autem vel eum
                iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla
                facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit
                augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet,</p>
                <hr>
                <div class="col-xs-6 col-md-3">
                  <img src="http://placehold.it/150x150" class="img-rounded pull-right">
              </div>
            </div> -->
        </div>


    </div>

    <!-- side bar process end -->

</div>
<?php include "../includes/layouts/footer.php"?>