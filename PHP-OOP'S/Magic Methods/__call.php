<?php

class Call
{
    //In PHP, __call() is a magic method triggered automatically when invoking an inaccessible or non-existent method on an object context. 
    function __call($name,$arguments)
    {
        echo $name."<br>";
        // stores as array
        foreach($arguments as $arr)
            {
                echo $arr;
            }
    }

    function name()
    {
        return "Anubhav"."<br>";
    }
}

$obj = new Call();

echo $obj->name();

echo $obj->user('This is a test');

?>