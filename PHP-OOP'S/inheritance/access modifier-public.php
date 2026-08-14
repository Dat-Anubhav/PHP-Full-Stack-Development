<?php

class School
{
    protected $school_name="St basil's school";

    function print_school_details()
    {
        echo "the school name is : $this->school_name"."<br>";
    }
}

class Student1
{
    function print_student1_details()
    {
        echo "Student1 school name is : $this->school_name"."<br>";
    }
}

class Student2 extends School
{
    function print_student2_details()
    {
        echo "Student2 school name is $this->school_name"."<br>";
    }
}

$obj1= new School();
$obj2=new Student1();
$obj3=new Student2();

$obj1->print_school_details();
$obj2->print_student1_details();
$obj3->print_student2_details();
?>