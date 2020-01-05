<?php

namespace classes;

class Logger {
    
    public function log(...$message)
    {
        $filename = __DIR__.DIRECTORY_SEPARATOR."log".DIRECTORY_SEPARATOR."logger_".date("Y-m-d")."log";
        if (!file_exists($filename));
            $file = fopen($filename, 'a') or die('Cannot open file:  '.$filename);
            fwrite($file, $message);
    }
}