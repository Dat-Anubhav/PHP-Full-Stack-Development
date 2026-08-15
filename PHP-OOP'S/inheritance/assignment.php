<?php

//Assignment : Create Doctor and Specialist Class and Show Overriding Concept

class Doctor
{
    private $specialist='eye surgery';
    function specialist()
    {
        echo "Doctor speciality in ".$this->specialist."<br>";

    }
    function degree()
    {
        echo "Jhola chhaap"."<br>";
    }
}

class Specialist extends Doctor
{
    public $specialist='brain surgery';
    function specialist()// method overiding
    {
        echo "Doctor speciality in ".$this->specialist."<br>";
        echo "parent class speciality : ";
        parent::specialist();//also displaying parent specialist function 

    }
}

$obj1 = new Specialist();
$obj2 = new Doctor();

echo $obj1->specialist();// displaying method overiding
echo $obj1->degree();
echo $obj2->specialist();
?>