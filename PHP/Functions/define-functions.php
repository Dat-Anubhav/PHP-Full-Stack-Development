<?php

function printEven($limit)
{
    for($i=1;$i<=$limit;$i++)
        {
            if($i%2==0)
                {
                    echo "$i is even"."<br>";
                }
            
        }
}

printEven(20);
?>