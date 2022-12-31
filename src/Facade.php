<?php

namespace Facades;

abstract class Facade
{
    public static function setNameSpace()
    {
        throw new \Error("Namespace not set");
    }

    public static function __callStatic(string $name, array $arguments)
    {
        $nameSpace = new (static::setNameSpace())();
        // TODO: Implement __callStatic() method.
        return ($nameSpace)->$name(...$arguments);
    }
}