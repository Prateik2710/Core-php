<?php

namespace vendor\connection;

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
            $this->pdo = new \PDO("mysql:host=$this->host;dbname=$this->db", $this->username, $this->password);
        } catch (\PDOException $e) {
            throw new \Exception($e->getMessage());
        }
    }
}