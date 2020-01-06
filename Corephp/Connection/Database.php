<?php

namespace vendor\connection;

use classes\Logger;

class Database {
    private $host;
    private $db;
    private $username;
    private $password;
    public $pdo = null;

    public function setConnection($host, $db, $username, $password) {
        $this->host = $host;
        $this->db = $db;
        $this->username = $username;
        $this->password = $password;
    }

    public function createConnection () {
        try {
            $this->pdo = new \PDO("mysql:host=$this->host;dbname=$this->db", $this->username, $this->password, array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION));
        } catch (\PDOException $e) {
            Logger::log($e->getMessage());
            throw new \Exception($e->getMessage());
        }
    }
}