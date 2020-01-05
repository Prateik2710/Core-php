<?php

namespace vendor\connection;

use Exception;
use Throwable;
use classes\Logger;
use vendor\connection\Database;

class Connection extends Database {
    public function __construct()
    {

        $host = getenv("connection_host");
        $dbname = getenv("db_name");
        $dbusername = getenv("db_username");
        $dbpassword = getenv("db_password");
        try {
            $this->setConnection("$host", "$dbname", "$dbusername", "$dbpassword");
            $this->createConnection();
        } catch (Throwable $e) {
            Logger::log($e->getMessage());
            throw new Exception($e->getMessage());
        } 
    }

    public function cleanName($name)
    {
        $find = ["'", "_", "-", " ", ".", "~", "/", "&"];
        return strtolower(str_replace($find, "", $name));
    }
}
