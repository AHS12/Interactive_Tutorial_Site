<?php
/**
 * Created by PhpStorm.
 * User: MD AZIZUL HAKIM
 * Date: 10/01/2018
 * Time: 01:51 PM
 */

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

