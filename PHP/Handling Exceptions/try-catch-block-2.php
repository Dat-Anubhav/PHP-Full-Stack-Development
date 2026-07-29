<?php

function divide($a,$b)
{
    if($b<=0)
        {
            throw new Exception("Divide by zero exception might happen"); 
        }
    
    $result=$a/$b;
    return $result;
}

try{
    $result = divide(10,0);
}catch(Exception $e)
{
    echo "Caught exception: ".$e->getMessage();
}
?>