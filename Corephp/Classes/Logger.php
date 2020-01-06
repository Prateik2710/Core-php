<?php

namespace classes;

class Logger {
    
    public function log(...$message)
    {
        if (!file_exists(getcwd().DIRECTORY_SEPARATOR."log")) {
            mkdir(getcwd().DIRECTORY_SEPARATOR."log", 0777);
            $filename = getcwd().DIRECTORY_SEPARATOR."log".DIRECTORY_SEPARATOR."logger_".date("Y-m-d").".log";
        } else {
            $filename = getcwd().DIRECTORY_SEPARATOR."log".DIRECTORY_SEPARATOR."logger_".date("Y-m-d").".log";
        }

        
        $file = fopen($filename, 'a+', true) or die('Cannot open file:  '.$filename);
        fwrite($file, implode($message, "\n")."\n");
    }
}