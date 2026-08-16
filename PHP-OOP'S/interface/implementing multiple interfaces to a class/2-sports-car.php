<?php

require_once '1-car.php';
require_once '4-Car-Model.php';

class Sports_car implements Car,Car_Model
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

    function model()
    {
        echo "Audi A8"."<br>";
    }

    function specification()
    {
        echo "Specification : 4X4 Axel"."<br>";
    }
}
?>