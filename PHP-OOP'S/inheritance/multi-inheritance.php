<?php

//php does not support multiple inheritance as of now may be i future version,
// As of now u can only extends only one class ata a time.


class University
{
    public $name = "Boston University";
    function helloUniversity()
    {
        echo "Hello from University Class"."<br>". PHP_EOL;
    }
}

class Teacher extends University
{

    public $name = "Jane";
    private $workingHours = 40;

    function helloTeacher()
    {
        echo "Hello from Teacher Class"."<br>". PHP_EOL;
    }

    function calculateSalary($perHour): int{
        return $perHour * $this->workingHours;
    }
}

class PartTimeTeacher extends Teacher{
    private $workingHours = 10;

    function calculateSalary($perHour) : int{
        return $perHour * $this->workingHours;
    }
    function helloPartTimeTeacher()
    {
        echo "Hello from Part Time Teacher Class"."<br>".PHP_EOL;
    }
}

$teacher1 = new PartTimeTeacher();
$teacher1->helloUniversity();
$teacher1->helloTeacher();
echo $teacher1->calculateSalary(10)."<br>". PHP_EOL;

$teacher2 = new Teacher();
$teacher1->helloUniversity();
$teacher1->helloTeacher();
echo $teacher2->calculateSalary(10)."<br>". PHP_EOL;
?>