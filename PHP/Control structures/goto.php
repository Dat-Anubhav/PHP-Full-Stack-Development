<?php

$input = 5;

if($input<=0)
    {
        goto error_block ;
    }

    error_block:
    echo "This is a test of goto statement".PHP_EOL."<br>";

    if($input>0)
        {
            goto b;
        }

    b:
    {
    echo "hello goto";
    }
?>