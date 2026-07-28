<?php

declare(strict_types=1);

function printInput(int $limit, $skip_number)
{
    echo "The limit is: $limit"."<br>";
    for($i=1;$i<=$limit;$i++)
        {
            if($i==$skip_number)
                {
                    continue;
                }
            
            echo "$i"."<br>";
        }
}

printInput(20,7);
?>