<?php

$arr = [5,67,3,4,2,5,6];

sort($arr);

var_dump($arr);

echo "<br><br> the array in ascending order is:<br><br>";

foreach($arr as $k)
    {
        echo "$k"."<br>";
    }

//array in descending order

rsort($arr);

echo "<br> the array in decending order is:<br><br>";

foreach($arr as $k)
    {
        echo "$k"."<br><br>";
    }
?>