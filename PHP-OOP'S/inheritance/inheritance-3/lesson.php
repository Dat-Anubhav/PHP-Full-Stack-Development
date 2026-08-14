<?php

class Lesson extends Course
{
    protected $lid;
    protected $lesson_name;

    function __construct($lid,$lesson_name,Course $course)
    {
        $this->lid=$lid;
        $this->lesson_name=$lesson_name;

        $this->id=$course->id;
        $this->course_name=$course->course_name;
    }

    function print_lesson_details()
    {
        echo "Lesson Lid id :".$this->lid."<br>";
        echo "Lesson name is :".$this->lesson_name."<br>";
    }
}
?>