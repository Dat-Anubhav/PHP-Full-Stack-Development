<?php

$fruits = ['apple','banana','cherry'];

//to remove banana use unset() method.
unset($fruits[1]); //just $fruits to remove all the elements

print_r($fruits);

var_dump($fruits);

echo "the array elements are:<br><br>";

foreach($fruits as $k)
    {
        echo "$k"."<br><br>";
    }

?>