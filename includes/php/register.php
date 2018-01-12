<?php
/**
 * Created by PhpStorm.
 * User: MD AZIZUL HAKIM
 * Date: 10/01/2018
 * Time: 01:54 PM
 */

@ob_start();
if (session_status() != PHP_SESSION_ACTIVE) session_start();

include "init.php";


$db = new Database();

if (isset($_POST['register_student'])) {


    $firstname = $db->escape_string($_POST['firstname']);
    $lastname = $db->escape_string($_POST['lastname']);
    $email = $db->escape_string($_POST['email']);
    $password = $db->escape_string($_POST['password']);
    $confirmPass = $db->escape_string($_POST['confirm_pass']);


    if ($password == $confirmPass) {


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

                $password = password_encrypt($password);
                $userRole = "S";

                $query = "INSERT INTO users(firstname,lastname,email,password,user_role,picture) VALUES ";
                $query .= "('$firstname','$lastname','$email','$password','$userRole','$fileUserImgName')";


                $result = $db->execute_query($query);
                if (!$result) {
                    die("Failed!!!" . mysqli_error($db->connection));
                }

                header("location: ../../public/login.php");
                $_SESSION['successReg'] = 1;

            }
        } else {
            $_SESSION['no_image'] = 1;
            header("location: ../../public/reg_student.php");
        }


    } else {
        $_SESSION['wrong_pass'] = 1;
        header("location: ../../public/reg_student.php");
    }
}


if (isset($_POST['register_teacher'])) {


//    register_as_teacher();
}