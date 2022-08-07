<?php

namespace app\app\database;

use PDO;

class Database
{
    private static PDO $pdo;

    protected function connect() : PDO
    {
        $host = DB_HOST;
        $dbName = DB_NAME;
        self::$pdo = new PDO("mysql:host=$host;dbname=$dbName", DB_USER, DB_PASSWORD);
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return self::$pdo;
    }
}