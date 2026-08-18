<?php

abstract class Shape
{
    protected $color;

    abstract function calculated_area();

    function get_color()
    {
        return $this->color;
    }
}

class rectangle extends Shape
{
    public $length;
    public $breath;

    function __construct($color,$length,$breath)
    {
        $this->color=$color;
        $this->length=$length;
        $this->breath=$breath;
    }

    function calculated_area()
    {
        $area = $this->length*$this->breath;
        return "Rectangle area is : $area"."<br>";
    }
}

class circle extends rectangle
{
    public $radius;

    function __construct($color,$radius)
    {
        $this->color=$color;
        $this->radius=$radius;
    }

    function calculated_area()
    {
        $area = 3.14*$this->radius*$this->radius;

        return "Circle area is : $area"."<br>";
    }
}

$rec = new rectangle("red",10,20);

echo $rec->get_color();
echo "<br>";
echo $rec->calculated_area();

$cir = new circle("yellow",5);

echo $cir->get_color();
echo "<br>";

echo $cir->calculated_area();

?>