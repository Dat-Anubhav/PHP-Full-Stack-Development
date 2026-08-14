<?php

require_once 'course.php';
require_once 'lesson.php';

$course1= new Course(101,'Data Analytics');
$course2= new Course(102,'Web Development');

$lesson1 = new Lesson(123,'Power Bi',$course1);
$lesson2 = new Lesson(1234,'Php',$course2);


$lesson1->print_lesson_details();
$lesson1->print_course_details();

echo "<br><br>";

$lesson2->print_lesson_details();
$lesson2->print_course_details();

?>