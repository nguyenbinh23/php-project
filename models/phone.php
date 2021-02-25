<?php 

namespace NguyenApp\Models;

use NguyenApp\Models\Product;

class Phone extends Product {
    const CODE = 'PHONE SXZDE';
    protected static $name = 'phone';
   
    public function getName()
    {
        return static::$name;
        return static::class;
    }

    public function setName($name)
    {
        static::$name = $name;
        return static::class;
    }

    public function getName2()
    {
        return self::$name;
        return self::class;
    }

    public function setName2($name)
    {
        self::$name = $name;
        return self::class;
    }

    public static function getGoogleName() 
    {
        return static::$name . ' ' . 'google-name';
    }

    public static function getGoogleName2() 
    {
        return self::$name . ' ' . 'google-name';
    }
}

