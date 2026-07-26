<?php

    //In Associative Arrays, you specify the index.
    //index => value
    // => is a special symbol to represent key and value.
    //key => value - key is the index and value is the value at that index.

    $arr = [0=>'one',1=>'two',2=>'three',4=>'four'];

    foreach($arr as $k=>$v)
        {
            echo "$k is $v"."<br><br>";
        }
    
    $array =['one','two','three','four'];

    foreach($array as $ke=>$va)
        {
            echo "the key is: $ke and the value is: $va"."<br><br>";
        }
?>