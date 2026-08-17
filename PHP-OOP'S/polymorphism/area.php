<?php

interface Area
{
    function area();
}

class square implements Area
{
    public $l;

    function __construct($l)
    {
        $this->l=$l;
    }
    function area()
    {
        $area = $this->l*$this->l;
        echo "The area of Square is : $area"."<br>";
    }
}

class Rectangle implements Area
{
    public $l;
    public $b;
    function __construct($l,$b)
    {
        $this->l=$l;
        $this->b=$b;
    }

    function area()
    {
        $area =$this->l*$this->b;
        echo "The area of rectangle is : $area"."<br>";
    }
}

$obj1 = new square(5);

$obj1->area();

$obj1 = new Rectangle(2,5);

$obj1->area();


?>