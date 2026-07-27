<?php
//How to copy an array

$arr = [1,2,5,67,4,3,2];

// method 1 by simple = operator
$arr1=$arr;

foreach($arr1 as $k)
    {
        echo "$k"."<br><br>";
    }

// method 2 through foreach loop

//creating an empty array
$arr2 = [];

foreach($arr as $k)
    {
        $arr2[]=$k;
    }

echo 'the $arr2 copied array through foreach is:'."<br><br>";

foreach($arr2 as $k)
    {
        echo "$k"."<br>";
    }

//Copying an associative array

$aso = ['2'=>'two','4'=>'three',5=>'four',1=>'Anubhav'];

echo "<br>".$aso[4]."<br>";

$aso1 = $aso;

echo "copied associative array through = operator:.<br><br>";

foreach($aso1 as $k=>$v)
    {
        echo "$k=>$v"."<br><br>";
    }

var_dump($aso1);
?>