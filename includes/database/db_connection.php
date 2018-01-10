<?php
//1.create a database connection


define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "interactivets");

$connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
//test if connection occured
if(mysqli_connect_errno()){
    die("databse connection failde ".mysqli_connect_error().
        " (".mysqli_connect_errno().")");
}

?>