<?php
function redirect_to($new_location){
    header("location: ".$new_location);
    exit;
}

function confirm_query($result_set){
    if(!$result_set){
        die("Database query failed");
    }
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
function password_encrypt($password){
    $hashed_format = "$2y$10$";  //tel php to use blowfish with 10 iteration
    $salt_length = 22;  //blowfish salt should be 22 charachter or more
    $salt = generate_salt($salt_length);
    $format_and_salt = $hashed_format . $salt;
    $hash = crypt($password, $format_and_salt);
    return $hash;
}

function generate_salt($legth){
    $unique_random_string = md5(uniqid(mt_rand(),true));

    //valid characters for a salt are [a-zA-Z0-9./]
    $base64_string = base64_encode($unique_random_string);

    //but not "+" sign
    $modified_base64_string = str_replace('+','.',$base64_string);

    $salt = substr($modified_base64_string,0,$legth);

    return $salt;
}

function password_check($password, $existing_hash){
    //existing hash contains format and salt at start
    $hash = crypt($password, $existing_hash);
    if($hash === $existing_hash){
        return true;
    }else{
        return false;
    }
}

function attempt_login($usermail, $password){
    $user = find_user_by_email($usermail);
    if($user){
        //check pass
        if(password_check($password, $user["password"])){
            //password matches
            return $user;
        }else{
            //password does not match
            return false;
        }
    }else{
        return false;
    }
}
function find_user_by_email($usermail){
    global $connection;
    $safe_usermail = mysqli_real_escape_string($connection,$usermail);

    $query = "SELECT * ";
    $query .= "FROM users ";
    $query .= "WHERE email = '{$safe_usermail}'";
    $query .= "LIMIT 1";
    $user_set = mysqli_query($connection,$query);
    confirm_query($user_set);
    if($user = mysqli_fetch_assoc($user_set)){
        return $user;
    }
    else{
        return null;
    }
}

function confirm_logged_in(){
    if(!isset($_SESSION['admin_id'])){
        redirect_to("login.php");
    }

}

function form_errors($errors = array()){

    $output = "";
    if (!empty($errors)){
        $output = "<div class=\"error\">";
        $output .= "please fix the errors";
        $output .="<ul>";
        foreach ($errors as $key=> $error){
            $output .="<li>";
            $output .= htmlentities($error);
            $output .="<li/>";
        }
        $output .="</ul>";
        $output .="</div>";
    }
    return $output;

}