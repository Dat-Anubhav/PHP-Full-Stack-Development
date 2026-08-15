<?php

require_once '1-car.php';

class Sports_car implements Car
{
    function speed()
    {
        echo "This car can speed up"."<br>";
    }

    function increase_speed()
    {
        echo "This car can increae speed"."<br>";
    }

    function decrease_speed()
    {
        echo "This car can also decrease its speed"."<br>";
    }
}
?>