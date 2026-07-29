<!-- 1) Write a Simple Function to Accept Parameters and Return Value -->

<?php

declare(strict_type=1);

function test(int $a,int $b): int
{
    $addition = $a+$b;
    return $addition;
}

echo "The addition result is: ".test(4.2,4.33);
?>