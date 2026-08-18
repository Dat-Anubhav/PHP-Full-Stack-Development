<?php

class Student
{
    private $id;
    private $data =[];

    function __set($name,$value)
    {
        echo "The set method is executed"."<br>";
        echo $name;
        echo $value;
        return $this->data[$name]=$value;
    }

    function __get($name)
    {
        echo "The get method is executed"."<br>";

        foreach($this->data as $arr)
            {
                echo $arr;
            }
    }
}

$obj = new Student();

$obj->id="Anubhav";
echo "<br>";
$obj->username;
?>