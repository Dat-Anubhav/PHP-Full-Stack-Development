<?php

// foreach is used to print arrays
$array= [1,2,3,4,5];

foreach($array as $v)
    {
        echo "the array value is: $v".PHP_EOL."<br>";
    }

$arr = ['one'=>1,'two'=>2,'three'=>3,'four'=>4,'five'=>5];

echo "<br><br>";

foreach($arr as $k => $v)
    {
        echo "the array 2 key is: $k and value is: $v".PHP_EOL."<br>";
    }
?>