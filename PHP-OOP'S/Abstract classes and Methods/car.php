<?php

abstract class Car
{
    function name()
    {
        echo "BMW"."<br>";
    }

    abstract public function model();
}

class model extends Car
{
    function model()
    {
        echo "m6"."<br>";
    }
}

$obj1 = new model();

echo $obj1->name();
echo $obj1->model();
?>