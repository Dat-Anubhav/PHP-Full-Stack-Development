<?php

class St
{
    public $name = 10;

    function __tostring(): string
    {
        echo "__tostring method is called"."<br>";
        return $this->name;
    }
}

$obj = new St();

echo $obj."<br><br>";

var_dump($obj);

?>