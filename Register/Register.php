<?php
namespace Register;

class Register
{
    protected static $objects;

    static function set($alias,$object)
    {
        self::$objects[$alias] = $object;
    }

    static function get($alias)
    {
        return self::$objects[$alias];
    }

    static function _unset($alias)
    {
        unset(self::$objects[$alias]);
    }

}