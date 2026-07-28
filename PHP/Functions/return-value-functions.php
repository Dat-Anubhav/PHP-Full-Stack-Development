<?php

function add($a,$b): int{

$addition =$a+$b;
return $addition;
}

echo add(20.33,10.33)."<br><br>";

//returning an array of 20 even numbers

function return_array(): array{
$arr = [];
for ($i=1;$i<=20;$i++)
    {
        if($i%2==0)
            {
                $arr[]=$i;
                // array_push($arr, $i);
            }
        
    }
return $arr;
}

var_dump(return_array());

?>