<?php

class Db
{

    public static function getConnection()
    {

        $paramsPath = ROOT . '/config/db_config.php';
        $params = include($paramsPath);


        $dsn = "mysql:host={$params['host']};dbName={$params['dbName']}";
        $db = new PDO($dsn, $params['user'], $params['password']);

        return $db;

    }

}