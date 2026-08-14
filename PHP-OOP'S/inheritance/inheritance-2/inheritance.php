<?php

require_once 'school.php';
require_once 'student.php';

$school1= new School("St. Basil's school","Basti");

$student1= new Student("Anubhav Srivastav",11,$school1);

$student1->print_student_details();
echo "<br><br>";
$student1->print_school_details();
?>