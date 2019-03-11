<?php
namespace Factory;

use \Object\Object1;

Class Factory
{
    protected static $object;

    static function createObject()
    {
        self::$object = new Object1();
        return self::$object;
    }
}