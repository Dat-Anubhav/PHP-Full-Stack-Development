<?php

function add($a,$b)
{
    $addition = $a+$b;
    return $addition;
}

$function_name="add";// if u want to call any other function then just pass the name of the function as a value in this variable 

echo "The result of the dynamic function calling of add funtion is :".$function_name(1,3)."<br><br>";

function sub($c,$d)
{
    $substraction = $c-$d;
    return $substraction;
}
$function_name="sub";
echo "Result: ".$function_name(5,3)."<br>";
?>