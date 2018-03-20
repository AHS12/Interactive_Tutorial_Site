<?php
/**
 * Created by PhpStorm.
 * User: MD AZIZUL HAKIM
 * Date: 20/03/2018
 * Time: 03:23 PM
 */
?>
<?php require_once("../includes/database/db_connection.php"); ?>
<?php require_once("../includes/php/session.php"); ?>
<?php require_once("../includes/php/functions.php"); ?>
<?php require_once "../includes/layouts/header2.php" ?>

<?php
confirm_logged_in();
teacher_logged_in();
?>
<?php $content_id = get_selected_content_by_id(); ?>

<?php
if (isset($content_id)) {


    //intro


    //total enrolled student

    $query_enrolled = "SELECT * FROM content_enrolled WHERE content_id = '$content_id'";
    $result = mysqli_query($connection, $query_enrolled);

    if (!$result) {
        die("Failed1!!!" . mysqli_error($connection));
    } else {
        $enrolled_counter = mysqli_num_rows($result);

    }


    ?>


    <div id="course_view" class="course_view">
        <div class="container" style="background-color: #182333;height: 300px; width: 100%;">
            <div class="row">

                <div class="col-lg-4">
                    <img style="margin-top: 40px;width: 90%;height: 200px;"
                         src=<?php

                    $content_values = find_selected_content_by_id($content_id);
                    echo "../images/" . htmlentities(mysqli_prep($content_values['content_picture']));

                    ?>>
                </div>
                <div class="col-lg-8">
                    <h2 style="color: #fff;"><?php

                        echo htmlentities(mysqli_prep($content_values['content_title']));

                        ?></h2>
                </div>
            </div>
        </div>
    </div>


    <br>
    <br>
    <br>

    <h3>Total Enrolled Student is <?php echo $enrolled_counter ?></h3>


    <?php
} else {
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<p> Please select a content</p>";
}
?>


<?php include "../includes/layouts/footer.php" ?>
