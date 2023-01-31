<?php

class Database
{
    private $hostname;
    private $dbname;
    private $username;
    private $password;

    public function __construct()
    {
        $config = require_once('config/config.php');

        $this->hostname = $config['hostname'];
        $this->dbname = $config['dbname'];
        $this->username = $config['username'];
        $this->password = $config['password'];
    }

    public function connect()
    {
        try {
            return new PDO("mysql:host=$this->hostname;dbname=$this->dbname", $this->username, $this->password);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
