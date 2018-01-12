<?php
/**
 * Created by PhpStorm.
 * User: MD AZIZUL HAKIM
 * Date: 11/01/2018
 * Time: 12:14 AM
 */

@ob_start();
if (session_status() != PHP_SESSION_ACTIVE) session_start();

session_destroy();

header("location: ../../public/index.php");