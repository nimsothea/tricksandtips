<?php

class Base
{
    private static $data = [];
    
    public function __call($name, $arguments)
    {
        if (isset(self::$data[$name]))
        {
            $func = self::$data[$name];
            $func($arguments);
        }
        else if (file_exists($name . '.php'))
        {
            include $name . '.php';
            if (isset(self::$data[$name]))
            {
                $func = self::$data[$name];
                $func($arguments);
            }
        }
    }
    
    public static function __callStatic($name, $arguments)
    {
        if (isset(self::$data[$name]))
        {
            $func = self::$data[$name];
            $func($arguments);
        }
        else if (file_exists($name . '.php'))
        {
            include $name . '.php';
            if (isset(self::$data[$name]))
            {
                $func = self::$data[$name];
                $func($arguments);
            }
        }
    }
    
    public static function getInstance()
    {
        return self::$data;
    }
    
    public static function setInstance($var, $value)
    {
        return self::$data[$var] = $value;
    }
}