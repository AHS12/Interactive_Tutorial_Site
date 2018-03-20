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

<?php

$content_id = $_GET['course'];
$question_id = $_GET['ques'];
$ans_id = $_GET['ans'];

$_SESSION['marks_content_id'] = $content_id;
$_SESSION['ans_id'] = $ans_id;


if (isset($content_id) && isset($ans_id) && isset($question_id)) {

//    echo "<br> <br> <br>".$question_id.$ans_id;


$query_question = "SELECT * FROM exam_ques WHERE ques_id = '$question_id'";
$question_data = mysqli_query($connection, $query_question);

while ($row = mysqli_fetch_assoc($question_data)) {
    $question = $row['question'];
    $teacher_id = $row['teacher_id'];
}

$query_answer = "SELECT * FROM exam_ans WHERE id = '$ans_id'";
$answer_data = mysqli_query($connection, $query_answer);

while ($row = mysqli_fetch_assoc($answer_data)) {
    $answer = $row['answer'];
    $ans_file_name = $row['answer_name'];
    $answer_url = $row['answer_url'];
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


<div class="container">
    <!--    --><?php //echo $_SESSION['ans_id'].$_SESSION['marks_content_id'] ?>

    <h3 class="text-center">Question : <?php echo $question ?></h3>

    <div>
        <label for="create_question">Given Answer</label>
        <textarea rows="5" class="form-control" name="answer" required><?php echo $answer ?></textarea>
    </div>

    <div>
        <h3 class="text-center">Submitted Code</h3>
    </div>

    <div>


        <?php if (file_exists("../" . $answer_url)) {

            ?>

            <div>

            <pre><code class="name"><?php echo htmlentities(readfile("../$answer_url")) ?></code>

            </div>

        <?php } else {
            echo "No Code Submitted";
        } ?>


    </div>

    <div>
        <h3>Remarks</h3>
        <form method="post" enctype="multipart/form-data"
              action="../includes/php/record_remark.php">

            <label>
                <input name="marks" type="number">
            </label>
            <button class="btn btn-success btn-lg" type="submit" name="submit_marks">submit</button>
        </form>

    </div>
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
