<?php

@ob_start();
if (session_status() != PHP_SESSION_ACTIVE) session_start();

require_once "../includes/php/functions.php";
confirm_logged_in();

?>


<?php require_once "../includes/database/db_connection.php" ?>
<?php require_once "../includes/php/functions.php" ?>
<?php require_once "../includes/layouts/header2.php" ?>
<?php $exam_id = get_selected_content_by_id();
?>

<?php
if (isset($exam_id)) {

    $_SESSION['current_exam_id'] = $exam_id;
    $query = "SELECT * FROM exam_ques WHERE ques_id = '$exam_id' ";
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        $current_content_id = $row['content_id'];
//        $exam_week = $row['content_week'];
        $exam_ques = $row['question'];
    }

    $query_content = "SELECT * FROM  content WHERE content_id = '$current_content_id'";
    $content_result = mysqli_query($connection, $query_content);

    while ($row = mysqli_fetch_assoc($content_result)) {
        $current_content_title = $row['content_title'];
        $current_content_user = $row['user_id'];
    }


    ?>
    <div class="container">
        <br>
        <a href="course_view.php?content=<?php echo $current_content_id ?>" class="btn btn-primary">Back
            To Curriculum</a>

        <hr>
        <div>
            <h2 class="text-center"><?php echo $current_content_title ?></h2>
            <br>
            <h3 class="text-center">Question:</h3>
            <p class="text-center"><?php echo $exam_ques ?></p>


        </div>
        <hr>
        <div>

            <form method="post" enctype="multipart/form-data"
                  action="../includes/php/answer_record.php">
                <label for="create_question">Enter Answer</label>
                <textarea rows="5" class="form-control" name="answer"></textarea>
                <br>
                <p class="help-block">Or Upload Your Code</p>
                <input type="file" name="code"> <br>
                <button class="btn btn-success btn-lg" type="submit" name="submit_ans">submit</button>
            </form>
        </div>
    </div>

    <?php
} else {
    echo "<br>";
    echo "<br>";
    echo "<p> Please select a content</p>";
}
?>


<br>
<br>
<!-- jQuery library -->
<script src="../lib/jquery-3.2.1.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="../lib/bootstrap.min.js"></script>

</body>
</html>
