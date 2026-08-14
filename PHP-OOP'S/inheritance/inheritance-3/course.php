<?php

class Course
{
    public $id;
    public $course_name;

    function __construct($id,$course_name)
    {
        $this->id=$id;
        $this->course_name=$course_name;
    }

    function get_id()
    {
        return $this->id;
    }

    function set_id()
    {
        return $this->id=$id;
    }

    function get_course_name()
    {
        return $this->course_name;
    }

    function set_course_name()
    {
        return $this->course_name=$course_name;
    }

    public function print_course_details()
    {
        echo "Course name is : ".$this->get_course_name()."<br>";
        echo "Course Id is : ".$this->get_id()."<br>";
    }
}
?>