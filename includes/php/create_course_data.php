<?php

if(isset($_GET['id'])){

    $content_id = $_GET['id'];
    $_SESSION['content_id'] = $content_id;
}else if(isset($_SESSION['content_id'])){
    $content_id = $_SESSION['content_id'];

}else{
    redirect_to("../../public/create_course_landing.php");
}
$content_values = find_selected_content_by_id($content_id);

$user_id = $content_values['user_id'];
$content_title = $content_values['content_title'];
$content_category = $content_values['content_category'];
$content_level = $content_values['content_level'];
$content_requirements = $content_values['content_requirements'];
$content_what_to_learn = $content_values['content_what_to_learn'];
$content_details = $content_values['content_details'];
$content_tags = $content_values['content_tags'];
$content_picture = $content_values['content_picture'];



?>