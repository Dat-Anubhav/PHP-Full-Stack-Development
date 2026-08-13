<?php

declare(strict_types=1);
require_once 'university.php';
require_once 'teacher.php';

$university = new University('Awadh University','Ayodhya',21233);

$teacher1 = new teacher('ANUBHAV',15,'PHYSICS',$university);
$teacher1->print_teacher_details();

$teacher1->print_university_details();

echo "<br><br>";

// $university2 = new University('Sidharth University','Sidharth Nagar',12345);

// $teacher2 = new teacher('Rishu',25,'Chemistry',$university2);

// $teacher2->print_teacher_details();
// $teacher2->print_university_details();



?>