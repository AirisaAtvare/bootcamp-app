<?php

class DB
{
    private static $instance = false;

    private function __construct()
    {
    }
    static public function getInstance()
    {
        if (self::$instance === false)
        {
            self::$instance = new self;
            $instance = new self;
            self::$instance->x = rand();
        }
        return(self::$instance);
    }
}
var_dump(DB::getInstance());
var_dump(DB::getInstance());
