<?php

// Anonymous function

$jod = function($a,$b){
    $addition = $a+$b;
    return $addition;
};

$sub=function($c,$d){
    $substraction=$c-$d;
    return $substraction;
};

// echo $jod(5,4)."<br>";

//anonymous function inside another function

function calculation($jod,$sub)
{
    $add_Result=$jod;
    $sub_result=$sub;

    echo "Addition result: $add_Result\n<br> Substraction result: $sub_result"."<br>";
}

calculation($jod(5,3),$sub(5,2));
?>