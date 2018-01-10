<?php

/**
 * Created by PhpStorm.
 * User: MD AZIZUL HAKIM
 * Date: 29/12/2017
 * Time: 08:36 PM
 */

require_once('db_constants.php');

class Database
{

    public $connection;


    function __construct()
    {
        $this->open_db_conn();
    }

    public function open_db_conn()
    {

        $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        /*
         * This is the "official" OO way to do it,
         * BUT $connect_error was broken until PHP 5.2.9 and 5.3.0.
         */
        if ($this->connection->connect_error) {
            die('Connect Error (' . $this->connection->connect_errno . ') '
                . $this->connection->connect_error);
        }
    }

    public function execute_query($sql)
    {
        $result = mysqli_query($this->connection, $sql);

        $this->confirm_query($result);

        return $result;

    }

    private function confirm_query($result)
    {

        if (!$result) {
            die("Query Failed");
        }

    }

    public function escape_string($string)
    {
        return mysqli_real_escape_string($this->connection, $string);
    }


}













