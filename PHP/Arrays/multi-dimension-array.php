<?php

$arr1 = ['one','two','three','four'];

$arr2 = ["five","six","seven"];

$arr3 = ['anubhav','rishu','naruto'];

$array= [$arr1,$arr2,$arr3];

foreach($array as $v)
    {//this will pick the array 
        foreach($v as $va)
            {//this will print that array
                echo "$va"."<br><br>";
            }
    }

var_dump($array);
?>