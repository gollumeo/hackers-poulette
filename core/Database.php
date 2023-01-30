<?php

class Database
{
    private $pdo;

    public function __construct()
    {
        include_once 'config/database.php';

        $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;

        try {
            $this->pdo = new PDO($dsn, DB_USER, DB_PASS);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    public function select($query, $data = [])
    {
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($data);
        return $stmt->fetchAll();
    }

    public function insert($query, $data = [])
    {
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute($data);
    }

    public function update($query, $data = [])
    {
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute($data);
    }

    public function delete($query, $data = [])
    {
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute($data);
    }
}
