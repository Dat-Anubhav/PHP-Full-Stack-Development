<?php

/*
The match expression branches evaluation based on an identity check of a value. 
Similarly to a switch statement, a match expression has a subject expression 
that is compared against multiple alternatives. Unlike switch, it will evaluate to a value much like ternary expressions. 
Unlike switch, the comparison is an identity check (===) rather than a weak equality check (==). 
Match expressions are available as of PHP 8.0.0.
*/

namespace cake;

$food = 'cake';

function cook($food){
$value_check = match ($food) {

'apple' => 'this is an apple cake',
'bar' => 'this is a bar',
'cake' => 'this is a coco-cola'
};
return $value_check;
};
echo cook($food);
?>