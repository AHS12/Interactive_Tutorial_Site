<?php require_once("session.php") ?>
<?php
function redirect_to($new_location)
{
    header("location: " . $new_location);
    exit;
}

function confirm_query($result_set)
{
    if (!$result_set) {
        die("Database query failed");
    }
}

function mysqli_prep($string)
{
    global $connection;
    $menu_name = mysqli_real_escape_string($connection, $string);
    return $menu_name;
}

function encrypt_user_pass($userpassword)
{
    //using Crypto_BlowFish encryption
    $hashFormate = "$2y$10$";
    $salt = "iusesomestupidestrin12";
    $hashF_and_salt = $hashFormate . $salt;
    //encrypting password
    $password = crypt($userpassword, $hashF_and_salt);

    return $password;

}

function password_encrypt($password)
{
    $hashed_format = "$2y$10$";  //tel php to use blowfish with 10 iteration
    $salt_length = 22;  //blowfish salt should be 22 charachter or more
    $salt = generate_salt($salt_length);
    $format_and_salt = $hashed_format . $salt;
    $hash = crypt($password, $format_and_salt);
    return $hash;
}

function generate_salt($legth)
{
    $unique_random_string = md5(uniqid(mt_rand(), true));

    //valid characters for a salt are [a-zA-Z0-9./]
    $base64_string = base64_encode($unique_random_string);

    //but not "+" sign
    $modified_base64_string = str_replace('+', '.', $base64_string);

    $salt = substr($modified_base64_string, 0, $legth);

    return $salt;
}

function password_check($password, $existing_hash)
{
    //existing hash contains format and salt at start
    $hash = crypt($password, $existing_hash);
    if ($hash === $existing_hash) {
        return true;
    } else {
        return false;
    }
}

function attempt_login($usermail, $password)
{
    $user = find_user_by_email($usermail);
    if ($user) {
        //check pass
        if (password_check($password, $user["password"])) {
            //password matches
            return $user;
        } else {
            //password does not match
            return false;
        }
    } else {
        return false;
    }
}

function find_user_by_email($usermail)
{
    global $connection;
    $safe_usermail = mysqli_real_escape_string($connection, $usermail);

    $query = "SELECT * ";
    $query .= "FROM users ";
    $query .= "WHERE email = '{$safe_usermail}'";
    $query .= "LIMIT 1";
    $user_set = mysqli_query($connection, $query);
    confirm_query($user_set);
    if ($user = mysqli_fetch_assoc($user_set)) {
        return $user;
    } else {
        return null;
    }
}

function teacher_logged_in()
{
    if (isset($_SESSION['userrole'])) {
        $userrole = $_SESSION['userrole'];

        if (($userrole != "T")) {
            redirect_to("../public/index2.php");
        }
    } else {
        redirect_to("../public/index2.php");
    }
}

function logged_in()
{
    return isset($_SESSION['user_id']);
}

function confirm_logged_in()
{
    if (!logged_in()) {
        $_SESSION['no_right'] = 1;
        redirect_to("login.php");
    }
}

function form_errors($errors = array())
{

    $output = "";
    if (!empty($errors)) {
        $output = "<div class=\"error\">";
        $output .= "please fix the errors";
        $output .= "<ul>";
        foreach ($errors as $key => $error) {
            $output .= "<li>";
            $output .= htmlentities($error);
            $output .= "<li/>";
        }
        $output .= "</ul>";
        $output .= "</div>";
    }
    return $output;

}

function find_selected_user_by_id($userID)
{

    global $connection;

    //escaping for security
    $safe_user_id = mysqli_real_escape_string($connection, $userID);
    //2. make query
    $query = "SELECT * ";
    $query .= "FROM users ";
    $query .= "WHERE id = {$safe_user_id} ";
    $query .= "LIMIT 1";
    //this is famous technique
    //used by dev so i can use if else(true) to apply any of them when it needed
    $userID_set = mysqli_query($connection, $query);
    confirm_query($userID_set);
    return $userID_set;
}

function get_selected_content_by_id()
{

    global $selected_content_id;

    if (isset($_GET["content"])) {
        $selected_content_id = $_GET["content"];
        return $selected_content_id;

    } else if (isset($_GET["exam"])) {
        $selected_content_id = $_GET["exam"];
        return $selected_content_id;

    } else if (isset($_GET["delete"])) {
        $selected_content_id = $_GET["delete"];
        return $selected_content_id;
    } else if (isset($_GET["vid"])) {
        $selected_content_id = $_GET["vid"];
        return $selected_content_id;
    } else if (isset($_GET["delqid"])) {
        $selected_content_id = $_GET["delqid"];
        return $selected_content_id;
    } else {
        $selected_content_id = null;
        return $selected_content_id;
    }

}

function find_selected_content_by_id($content_id)
{
    global $connection;

    //escaping for security
    $safe_content_id = mysqli_real_escape_string($connection, $content_id);

    //2. make query
    $query = "SELECT * ";
    $query .= "FROM content ";
    $query .= "WHERE content_id = {$safe_content_id} ";
    $query .= "LIMIT 1";
    //this is famous technique
    //used by dev so i can use if else(true) to apply any of them when it needed
    $content_set = mysqli_query($connection, $query);
    confirm_query($content_set);
    if ($content = mysqli_fetch_assoc($content_set)) {
        return $content;
    } else {
        return null;
    }
}

function find_user_by_user_id($user_id)
{

    global $connection;

    //escaping for security
    $safe_user_id = mysqli_real_escape_string($connection, $user_id);

    //2. make query
    $query = "SELECT * ";
    $query .= "FROM users ";
    $query .= "WHERE id = {$safe_user_id} ";
    $query .= "LIMIT 1";
    //this is famous technique
    //used by dev so i can use if else(true) to apply any of them when it needed
    $user_set = mysqli_query($connection, $query);
    confirm_query($user_set);
    if ($user = mysqli_fetch_assoc($user_set)) {
        return $user;
    } else {
        return null;
    }

}

function check_all_data_of_courses()
{
    $showmodal = true;
    return $showmodal;
}

function check_if_enrolled($user_id, $content_id)
{
    global $connection;

    //escaping for security
    $safe_user_id = mysqli_real_escape_string($connection, $user_id);
    $safe_content_id = mysqli_real_escape_string($connection, $content_id);

    //2. make query
    $query = "SELECT * ";
    $query .= "FROM content_enrolled ";
    $query .= "WHERE user_id = {$safe_user_id} ";
    $query .= "AND content_id = {$safe_content_id}";
    //this is famous technique
    //used by dev so i can use if else(true) to apply any of them when it needed
    $user_set = mysqli_query($connection, $query);
    confirm_query($user_set);
    $count_enroll = mysqli_num_rows($user_set);
    if ($count_enroll == 1) {
        $found_enroll = true;
        return $found_enroll;
    } else {
        $found_enroll = false;
        return $found_enroll;
    }


}

function get_num_of_weeks($content_id)
{
    global $connection;

    $query = "SELECT video_serial FROM content_resources WHERE video_content_id='$content_id'";
    $result = mysqli_query($connection, $query);

    $num_of_videos = mysqli_num_rows($result);
    $num_of_weeks = ceil($num_of_videos / 7);

    return $num_of_weeks;
}

function get_week_progress($user_id, $content_id)
{
    global $connection;

    $query = "SELECT week_progress FROM content_enrolled WHERE content_id = '$content_id' AND user_id = '$user_id' LIMIT 1";

    $result = mysqli_query($connection, $query);
    $week_progress = mysqli_fetch_assoc($result);
    $week = $week_progress['week_progress'];

    return $week;


}


function delete_video($video_url)
{
    unlink("../" . $video_url);
    //redirecting to same page
//    header('Location: ' . $_SERVER['PHP_SELF']);

}

function delete_file($file_url)
{
    unlink("../" . $file_url);
    header('Location: ' . $_SERVER['PHP_SELF']);

}