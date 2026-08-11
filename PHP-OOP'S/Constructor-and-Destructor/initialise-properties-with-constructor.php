<?php

class students
{
    public $name;
    public $class;

    function  __construct($name="Naruto",$class="4th")
    {
        echo "Hello this is a constructor"."<br>";

        $this->name=$name;
        $this->class=$class;
    }

    public function nameclass()
    {

        echo "The student name is ".$this->name." "."It's class is ".$this->class." "."<br>";
    }
}

$obj= new students();

echo $obj->nameclass();

?>