<?php
// 1) Write Infinite loop with for loop and print even and odd numbers till 20 numbers.


for($i=20;$i<=20;$i--)
    {
        if($i==0)
            {
                break;
            }

        if($i%2==0)
            {
                echo "$i is even".PHP_EOL."<br>";
            }
        
        
    }

?>