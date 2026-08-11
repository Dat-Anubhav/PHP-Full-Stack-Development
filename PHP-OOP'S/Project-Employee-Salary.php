<?php
/*
Write a PHP class named Employee with properties for ID, name, default working hours per day (8), 
default hourly rate (15), leaves taken, and working days, including a method getSalaryAmount($totalDays) 
that calculates and returns the integer salary based on actual days worked after deducting leaves, 
then instantiate it twice to calculate and print the work summary and final salaries for two different employees.
*/

class Employee
{
    public $id;
    public $name;
    public $default_work_hours_per_day=8;
    public $default_hourly_rate=15;
    public $leaves;
    public $working_days;

    public function get_salary_amount($totalDays): int
    {
        $this->working_days=$totalDays-$this->leaves;

        echo "Total Working Days = ".$this->working_days."<br>";
        $salary = $this->working_days*$this->default_work_hours_per_day*$this->default_hourly_rate;

        return $salary;
    }
}

$emp1=new Employee();

$emp1->id=101;
$emp1->name='Anubhav';
$emp1->leaves=2;

echo "Employee 1 i.e $emp1->name salary is : ".$emp1->get_salary_amount(90)."<br>";
echo "Has taken $emp1->leaves and worked for total $emp1->working_days days.";

echo "<br><br>";

$emp2=new Employee();

$emp2->id=105;
$emp2->name='Rishu';
$emp2->leaves=3;

echo "Employee 2 i.e $emp1->name salary is : ".$emp2->get_salary_amount(90)."<br>";
echo "Has taken $emp1->leaves and worked for total $emp1->working_days days.";


?>