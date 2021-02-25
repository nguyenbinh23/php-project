<?php

namespace NguyenApp\Models;

class Product
{
    protected static $name = 'product';
    const CODE = 'PRODUCT XSZ';
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

    public function getCode() {
        return self::CODE;
    }
    public function getCode2() {
        return static::CODE;
    }
    public function getCode3() {
        return $this::CODE;
    }
}
