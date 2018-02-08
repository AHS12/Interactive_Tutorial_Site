<?php
/**
 * Created by PhpStorm.
 * User: MD AZIZUL HAKIM
 * Date: 22/01/2018
 * Time: 06:59 PM
 */


@ob_start();
if (session_status() != PHP_SESSION_ACTIVE) session_start();


if (isset($_FILES['file1']['name'])) {
    $fileName = $_FILES['file1']['name'];
    $fileTemp = $_FILES['file1']['tmp_name'];
    $fileType = $_FILES['file1']['type'];
    $fileSize = $_FILES['file1']['size'];
    $fileErrorMsg = $_FILES['file1']['error'];


    $fileName = time() . $fileName;
    $_SESSION['fileName'] = $fileName;
    $filePath = "../../videos/" . $fileName;

    if (!$fileTemp) {
        echo "Please Select Video to Upload";
        exit();
    } else {
        if ($fileType == "video/mp4") {
            if ($fileSize < 200000000) {
                if (move_uploaded_file($fileTemp, $filePath)) {
                    echo "Upload completed";
                } else {
                    echo "upload Failed";
                }

            } else echo "ERROR: Maximum Video Size is 200mb";
        } else echo "ERROR: upload mp4";
    }
}



