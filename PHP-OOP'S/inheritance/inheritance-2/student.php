<?php

class Student extends School
{
    public $student_name;
    public $roll_no;
    public $school_name;
    public $city;

    public function __construct($student_name,$roll_no,School $school)
    {
        $this->student_name=$student_name;
        $this->roll_no=$roll_no;

        $this->school_name=$school->school_name;
        $this->city=$school->city;
    }

    public function print_student_details()
    {
        echo "Student name is : ".$this->school_name."<br>";
        echo "Roll no : ".$this->roll_no."<br>";
        echo "School name is : ".$this->school_name."<br>";
        echo "City : ".$this->city."<br>";
    }
}
?>