<?php

namespace vendor\connection;

use Exception;
use Throwable;
use classes\Logger;
use vendor\connection\Database;
use vendor\connection\EnvLoader;

class Connection extends Database {
    public function __construct()
    {
        $envLoader = new EnvLoader();
        $host = getenv("DB_HOST");
        $dbname = getenv("DB_DATABASE");
        $dbusername = getenv("DB_USERNAME");
        $dbpassword = getenv("DB_PASSWORD");
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
