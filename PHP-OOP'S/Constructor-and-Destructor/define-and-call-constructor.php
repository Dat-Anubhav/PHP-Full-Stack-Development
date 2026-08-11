<?php

class students
{
    public $name;
    public $class;

    function  __construct()
    {
        echo "Hello this is a constructor"."<br>";
    }

    public function nameclass($name,$class)
    {
        $this->name=$name;
        $this->class=$class;

        echo "The student name is ".$this->name." "."It's class is ".$this->class." "."<br>";
    }
}

$obj= new students();

echo $obj->nameclass('anubhav','3rd');

?>