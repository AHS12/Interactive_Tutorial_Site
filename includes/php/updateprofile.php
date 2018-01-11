<?php
/**
 * Created by PhpStorm.
 * User: MD AZIZUL HAKIM
 * Date: 11/01/2018
 * Time: 01:17 AM
 */

@ob_start();
if (session_status() != PHP_SESSION_ACTIVE) session_start();

include "init.php";

$db2 = new Database();

if (isset($_POST['update_student'])) {
    $newfirstname = $db2->escape_string($_POST['first_name']);
    $newLastname = $db2->escape_string($_POST['last_name']);
    $newmail = $db2->escape_string($_POST['email']);
//    $newpass = $db2->escape_string($_POST['password']);
    $newinstitute = $db2->escape_string($_POST['institution']);
    $newbio = $db2->escape_string($_POST['bio']);

    //process image


    $fileTmp = $_FILES['image']['tmp_name']; //Temporary location Of File
    $fileUserImgName = time() . $_FILES['image']['name'];
    $fileType = $_FILES['image']['type'];
    $filePath = "../../images/" . $fileUserImgName;

    $fileSize = getimagesize($fileTmp);

    if ($fileSize != false) {


        if (($fileType != "image/jpeg" && $fileType != "image/png") && $fileType != "image/gif") {

            $_SESSION['wrong_image_formate'] = 1;
            header("location: ../../public/reg_student.php");

        } else {

            //register process started

            move_uploaded_file($fileTmp, $filePath);

//            $password = password_encrypt($newpass);
//            $userRole = "S";

            $query = "UPDATE users SET firstname= '$newfirstname',lastname ='$newLastname',email ='$newmail',";
            $query .= "institution='$newinstitute',bio='$newbio',picture='$fileUserImgName' WHERE email='$newmail'";

            $result = $db2->execute_query($query);
            if (!$result) {
                die("Failed!!!" . mysqli_error($db2->connection));
            } //update SESSION


            else {

//                $usermail = $_SESSION['usermail'];

                $user_id = $_SESSION["user_id"];

                $query = "SELECT * ";
                $query .= "FROM users ";
                $query .= "WHERE id = '{$user_id}'";
                $query .= "LIMIT 1";

                $profile_data = $db2->execute_query($query);



                $update_profile_data = mysqli_fetch_assoc($profile_data);


                if ($update_profile_data) {
                    $_SESSION["userfname"] = $update_profile_data["firstname"];
                    $_SESSION["userlname"] = $update_profile_data["lastname"];
                    $_SESSION["usermail"] = $update_profile_data["email"];
                    $_SESSION["userpass"] = $update_profile_data["password"];
                    $_SESSION["userpicture"] = $update_profile_data["picture"];
                    $_SESSION["userinstitute"] = $update_profile_data["institution"];
                    $_SESSION["userbio"] = $update_profile_data["bio"];


                    redirect_to("../../public/profile.php");

                    //
                } else {

                }
            }
            $_SESSION['successReg'] = 1;

        }
    } else {
        $_SESSION['no_image'] = 1;
        header("location: ../../public/profile.php");
    }

    // update process ends


}
