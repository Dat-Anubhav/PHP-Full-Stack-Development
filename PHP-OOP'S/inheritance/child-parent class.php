<?php

class Uni
{
    public $college='Delhi University';

    function university_college()
    {
        echo "This is a university class"."<br>";
    }
}

class College extends University
{
    function college()
    {
        echo "This is a College class"."<br>"."from $this->college";
    }
}

$obj = new college();
$obj->university_college();
$obj->college();


?>