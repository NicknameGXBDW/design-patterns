<?php
namespace Instance;

class Instance
{
    protected $instance;

    private function __construct()
    {
    }

    protected static function getInstance()
    {
        if(self::$instance){
            return self::$instance;
        } else {
            self::$instance = new self();
            return self::$instance;
        }
    }
}