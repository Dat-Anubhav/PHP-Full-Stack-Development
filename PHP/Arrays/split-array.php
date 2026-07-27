<?php

$arr = "Anubhav,rishu,naruto,kakashi";

//explode() converts an string into an array
$new_arr = explode(',',$arr);

foreach($new_arr as $k)
    {
        echo "$k"."<br><br>";
    }

print_r($new_arr);

echo "<br><br>";

var_dump($new_arr);

//implode() converts an array in to a string

$new_string = implode(',',$new_arr);

echo "<br> converting arrau back into strings :<br><br>";

echo "$new_string"."<br><br>";

var_dump($new_string);

// limited numbers of elements

$array2 = explode(',',$new_string, 2);

echo ("<br><br><h1>the new array from string with limited(i.e just 2) elements is :</h1><br><br>");

foreach($array2 as $k=>$v)
    {
        echo "$k=>$v"."<br><br>";
    }

?>