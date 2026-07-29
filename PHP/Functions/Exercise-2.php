<!-- 1) Write a function to accept two integer values and show add, sub, multiple and divide.
2) Accept Optional parameter to perform specific operations
3) Print the output from the function.
4) declare(strict_types=1); -->

<?php

declare(strict_type=1);
function exercise(int $a,int $b, $result=null)
{
    $add = $a+$b;
    $sub = $a-$b;
    $mul = $a*$b;
    $div = $a/$b;

    $result = "Addition is: $add,<br> Substraction is: $sub, <br> Multiplication is: $mul, <br> Division is: $div";

    return $result;

}

echo exercise(6.2,6.2);
?>