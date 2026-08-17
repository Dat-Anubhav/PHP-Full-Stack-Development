<?php

abstract class Car
{

    function __construct()
    {
        echo "Hello abstract"."<br>";
    }

    abstract public function intro();
}

class model extends Car
{
    function intro()
    {
        echo "This is a Audi Car"."<br>";
    }
}

$obj1 = new model();

echo $obj1->intro();


?>