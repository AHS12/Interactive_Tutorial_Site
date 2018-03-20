<?php

$session = session_id();
$time = time();
$time_out_in_seconds = 60*60;
$time_out = $time - $time_out_in_seconds;

$query = "SELECT * FROM users_online WHERE session='$session'";
$send_query = mysqli_query($connection, $query);
$count = mysqli_num_rows($send_query);
if($count == NULL){
    mysqli_query($connection,"INSERT INTO users_online(session,time) VALUES('$session','$time')");
}else{
    mysqli_query($connection,"UPDATE users_online SET time = '$time' WHERE session= '$session'");

}
$users_online_query = mysqli_query($connection,"SELECT * FROM users_online WHERE time > '$time_out'");
$count_user = mysqli_num_rows($users_online_query);
?>