<?php

class pi
{
    public static $value = 3.141;

    function static_value()
    {
        return self::$value;
    }

    static function name()
    {
        echo "Anubhav Srivastav";
    }
}

$obj = new pi();

// static properties(static $value) can only be called through a function
echo $obj->static_value();// no static keyword therefore it can be called through an object

pi::name();//static keyword can't be called through object

?>