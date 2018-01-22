<?php

class Registry
{
    protected static $objects;

    public static function set($alias, $object)
    {
        if (!isset($objects[$alias])) {
            self::$objects[$alias] = $object;
        }
    }

    public static function get($alias)
    {
        return self::$objects[$alias];
    }

    public static function unset($alias)
    {
        unset(self::$objects[$alias]);
    }
}


Registry::set('rand', stdClass::class);
Registry::get('rand');
Registry::unset('rand');
