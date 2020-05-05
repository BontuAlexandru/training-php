<?php

function pdoConnectMysql()
{
try {
    return new PDO('mysql:host='.DB_SERVER.';dbname='.DB_NAME.';charset=utf8', DB_USER, DB_PASSWORD);
} catch (PDOException $exception) {
    die('Failed to connect to database!');
    }
}