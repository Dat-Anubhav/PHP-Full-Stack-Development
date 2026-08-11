<?php
/*
1) Define a Student Class
2) Define Properties of Class
	- name
	- class
3) Define get and set methods to set and access the properties via the methods.
4) Define printDetails to print both the properties.
*/

class Student
{
    public $name;
    public $class;

    public function setname($name)
    {
        $this->name=$name;
    }

    public function getname()
    {
        return $this->name;
    }

    public function setClass($class)
    {
        $this->class=$class; 
    }

    public function getClass()
    {
        return $this->class;
    }
}

$obj= new Student();

$obj->setname('Anubhav');

echo "Name is = ".$obj->getname()."<br>";

$obj->setClass('3rd');

echo "Class is = ".$obj->getClass()."<br>";
?>

