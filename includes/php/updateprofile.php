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
    $newpass = $db2->escape_string($_POST['password']);
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

            $password = password_encrypt($newpass);
            $userRole = "S";

            $query = "UPDATE users SET firstname= '$newfirstname',lastname='$newLastname',email='$newmail',password='$newpass',";
            $query .= "institution='$newinstitute',bio='$newbio',picture='$fileUserImgName'";

            $result = $db->execute_query($query);
            if (!$result) {
                die("Failed!!!" . mysqli_error($db->connection));
            }

            header("location: ../../public/profile.php");
            $_SESSION['successReg'] = 1;

        }
    } else {
        $_SESSION['no_image'] = 1;
        header("location: ../../public/profile.php");
    }


}
