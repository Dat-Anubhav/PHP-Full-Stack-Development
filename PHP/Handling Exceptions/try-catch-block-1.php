<?php

try{
    $div=10/0;

}catch(Throwable $e)// to catch division by zero error use throwable not Exception
{
    echo "An error accured i.e can't divide by zero".$e->getMessage();
}
?>