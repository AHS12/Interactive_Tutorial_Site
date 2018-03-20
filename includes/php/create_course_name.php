<?php
/**
 * Created by PhpStorm.
 * User: MD AZIZUL HAKIM
 * Date: 15/03/2018
 * Time: 10:03 AM
 */
?>

<?php require_once("../database/db_connection.php"); ?>
<?php require_once("functions.php"); ?>
<?php require_once("session.php"); ?>
<?php require_once("validation_function.php"); ?>
    <!---->
<?php
teacher_logged_in();
?>
    <br>
    <br>
    <br>
<?php
if (isset($_POST['submit'])) {

    $timestamp = time();
    $content_date = strftime("%Y-%m-%d", $timestamp);

    $user_id = $_SESSION['user_id'];
    $content_title = mysqli_prep($_POST['content_title']);
    $content_category = "Android";
    $content_level = "Beginner";
    $content_requirements = " ";
    $content_what_to_learn = " ";
    $content_details = " ";
    $content_tags = " ";
    $content_picture = "test_image5.jpg";
    $visibility = 0;

    $required_fields = array("content_title");
    validate_presences($required_fields);

    if (!empty($errors)) {
        $_SESSION["errors"] = $errors;
        redirect_to("../../public/create_course_title.php");
    }
    $query = "INSERT INTO content(user_id, content_title, content_what_to_learn, content_details, content_requirements, content_picture, content_date, content_category, content_tags, content_level, visibility) VALUES (";
    $query .= "'{$user_id}', '{$content_title}', '{$content_what_to_learn}', '{$content_details}', '{$content_requirements}', '{$content_picture}', '{$content_date}', '{$content_category}', '{$content_tags}', '{$content_level}', '{$visibility}')";
    //this is famous technique used by dev so i can use if else(true) to apply any of them when it needed
    $result = mysqli_query($connection, $query);

    //test if any error occurs
    if (isset($result)) {
        redirect_to("../../public/create_course_landing.php");
    } else {
        //failure
        $_SESSION["message"] = "Course creation failed";
        die("database query failed!! " . mysqli_error($connection));

    }


}
?>

<?php
echo message(); //session message for successful form submission or not
?>
<?php
$errors = errors();  //session error
echo form_errors($errors);
?>