<?php

$array= ['one','two','three','four','five'];

foreach($array as $key => $value)
    {
        if($key%2 === 0)
            {
                continue;
            echo "$key => $value".PHP_EOL."<br>";
            
            }
            echo "$key => $value".PHP_EOL."<br>";
    }