<?php

$arr=[];

var_dump($arr);
echo '<br>';

print_r($arr);

foreach($arr as $a)
    {
        echo "The array is : $a"."<br>";
    }

$arr = 10;

echo "as integer : $arr"."<br>";

$arr = [11,20];

echo "the arr[0]=$arr[0]";
echo "<br>";
$arr[0]=22;

echo "the new arr[0]: $arr[0]"."<br>";
?>