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


    <br>
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

    <h3 class="text-center ">Total Enrolled Student : <?php echo $enrolled_counter ?></h3>

    <br>

    <div>
        <h3>Student Exam Table</h3>
        <br>


        <table class="table table-bordered table-responsive">
            <thead class="bg-success">
            <tr>
                <th>Week</th>
                <th>Question</th>
                <th>Sumbited by</th>
                <th>Marks</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>


            <?php
            $query = "SELECT * FROM exam_ques WHERE content_id = '$content_id' ";
            $result = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                $exam_id = $row['ques_id'];
                $exam_week = $row['content_week'];
                $exam_ques = $row['question'];

                $query_answer = "SELECT * FROM exam_ans WHERE ques_id = '$exam_id'";
                $found_user_result = mysqli_query($connection, $query_answer);

                while ($row = mysqli_fetch_assoc($found_user_result)) {
                    $found_user_id = $row['examinee_id'];
                    $found_user_ans_id = $row['id'];
                    $found_user_marks = $row['marks'];


                    $query_user = "SELECT * FROM users WHERE id = '$found_user_id'";
                    $found_user_data = mysqli_query($connection, $query_user);

                    while ($row = mysqli_fetch_assoc($found_user_data)) {
                        $found_user_fname = $row['firstname'];
                        $found_user_lname = $row['lastname'];


                        ?>
                        <tr>
                            <td><?php echo $exam_week ?></td>
                            <td><?php echo $exam_ques ?></td>
                            <td><?php echo $found_user_fname . " " . $found_user_lname ?></td>
                            <td><?php echo $found_user_marks ?></td>
                            <td>
                                <a href="course_exam_evaluate.php?course=<?php echo htmlentities($content_id) ?>&ques=<?php echo htmlentities($exam_id) ?>&ans=<?php echo htmlentities($found_user_ans_id) ?>"
                                   class="btn btn-info">Evaluate</a>

                            </td>
                        </tr>

                    <?php }
                }
            } ?>
            </tbody>
        </table>

    </div>

    <?php
} else {
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<p> Please select a content</p>";
}
?>


<?php include "../includes/layouts/footer.php" ?>
