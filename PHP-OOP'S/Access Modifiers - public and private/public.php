<?php

class Pub
{
    public $dog1;
    public $dog2;

    function dog_bark()
    {
        echo "woof woof"."<br>";
    }

     function dog_sleep()
    {
        echo "Zzzzzzzzzzzzzz"."<br>";
    }
}

$obj = new Pub();

$obj->dog1 = 'Tommy';
$obj->dog2 = 'Billu';

echo "The dogs are : ".$obj->dog1."<br>".$obj->dog2;

$obj->dog_bark();
$obj->dog_sleep();
?>