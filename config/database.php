<?php

class Database
{
    private $pdo;

    public function __construct()
    {
        include_once 'config.php';

        $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;

        try {
            $this->pdo = new PDO($dsn, DB_USER, DB_PASS);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }
}
