<?php
namespace corephp\Classes;

Class EnvLoader {

    public function __construct($fileName=null)
    {
        if (!$fileName) {
            $env = getcwd().DIRECTORY_SEPARATOR.".env";
        } else {
            $env = getcwd().DIRECTORY_SEPARATOR.$fileName;
        }
        $file = file_get_contents($env);

        $this->read($file);
    }

    public function read($file)
    {
        if (strpos($file, "=")) {
            $vars = explode("\n", $file);
            $this->parse($vars);
        }
    }

    public function parse($vars)
    {
        if (count($vars)) {
            foreach ($vars as $var) {
                $this->setInEnvoronment($var);
            }    
        }
    }

    public function setInEnvoronment($var)
    {
        if (strpos($var, "=")) {
            $values = explode("=", $var);
            $key = trim($values[0]);
            $value = trim($values[1]);
            putenv("$key=$value");
        }
    }

}