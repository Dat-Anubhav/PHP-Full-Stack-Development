<?php

//call by value

$salary=0;
function salary_bonus($salary)
{
    $salary=$salary+500;
    return $salary;
}

echo salary_bonus(300);
echo "<br>";

echo "The salary is: $salary";

//call by reference

function salary_bonus2(&$salary)
{
    $salary=$salary+500;
    return $salary;
}

echo salary_bonus2($salary);
echo "<br>";
echo "The call by reference salary is: $salary";
?>