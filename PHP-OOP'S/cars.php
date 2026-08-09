<?php
/* 
1. Write PHP Program to Define Three Car Types and its Color.
2. Display Car Type and its Color.
*/

class car
{
    public $name;
    public $color;

    function set_name($name1)
    {
        $this->name=$name1;
    }

    function set_color($color)
    {
        $this->color=$color;
    }
}
$cool_car= new car();

$cool_car->set_name('ferrari');
echo "<br>";
$cool_car->set_color('red');

echo "cool car is :".$cool_car->name."  "."color is: ".$cool_car->color;

$modern_car= new car();

$modern_car->set_name('fortuner');
$modern_car->set_color('black');

echo "<br>"."Modern car: "." ".$modern_car->name." "."Modern car color is: ".$modern_car->color;





?>