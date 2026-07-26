<?php

$arr = [
    "one"=>1,
    "1.5"=>true,
    "true"=>3.5,
    false => 2,
    100 => -100
];

echo "the mixed array is:"."<br><br>";

foreach($arr as $k=>$v)
    {
        echo "the key is: $k and the value is: $v".PHP_EOL."<br>";
    }

echo "<h1>the vardump</h1>"."<br><br>"; 
var_dump($arr);
?>