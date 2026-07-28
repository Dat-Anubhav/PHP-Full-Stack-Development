<?php

//printing odd numbers till $limit and skipping at $ skip: $limit as a mandatory parameter and $skip as optional parameter;
// note: always pass the mandatory parameter first then th eoptional parameters
function default_optional_parameter($limit, $skip = 5)
{
    for($i=1;$i<=$limit;$i++)
        {
            if($i==$skip)
                {
                    continue;
                }
            if($i%2 != 0)
                {
                    echo "$i is an odd number"."<br>";
                }
        }

}

echo default_optional_parameter(20)
?>