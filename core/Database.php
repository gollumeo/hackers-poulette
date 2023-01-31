<?php

namespace App\core;

use PDO;
use PDOException;
use App\config\Config as CONFIG;

class Database
{

    private $hostname;
    private $dbname;
    private $username;
    private $password;
    private static $instance;
    private $conn;

    public function __construct()
    {

        $this->hostname = CONFIG::DB_HOST;
        $this->dbname = CONFIG::DB_NAME;
        $this->username = CONFIG::DB_USER;
        $this->password = CONFIG::DB_PASS;

        try {
            return $this->conn = new PDO("mysql:host=$this->hostname;dbname=$this->dbname", $this->username, $this->password);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->conn;
    }
}
