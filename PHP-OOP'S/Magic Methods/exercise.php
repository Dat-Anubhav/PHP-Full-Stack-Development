<?php

class p1
{
    public $data = [];
    private $id;

    function __call($name,$argument)
    {
        echo $name."<br>";
        foreach($argument as $arr)
            {
                echo $arr."<br>";
            }
    }

    function __set($name,$value)
    {
        echo "set method is called"."<br>";
        echo $name."<br>";
        echo $value."<br>";

        $this->data[$name]=$value;
    }

    function __get($id)
    {
        echo "get method is called"."<br>";

        $a= $this->data;

        foreach($a as $v)
            {
                echo $v."<br>";
            }
    }

    function __tostring(): string
    {
        return $name;
    }

    function __debuginfo()
    {
        echo "var_dump is used therefore this debug function is called"."<br>"; 
    }
}

$obj = new p1();

$obj->user('Anubhav');
$obj->id=123;
echo "<br>";
var_dump($obj);
echo "<br>";
$obj->name;
?>