<!-- Method 1 -->
<h1>Method 1 using Global variablies via global keyword</h1>
<?php

$x=75;


function myfunction()
{
    global $x;
    echo $x;
}

myfunction()
?>

<!-- Method 2 -->
<h1>Method 2 using Global variables via $GLOBALS array</h1>

<?php

$x =45;

//Using class then u have to create an object to call this class 
// otherwise if u don't have class then same process as above
class Glob{

function myfunc(){
echo $GLOBALS['x'];
}
}
$obj = new Glob();
$obj->myfunc();

function myfunct(){
echo $GLOBALS['x'];
}
echo "<br>";
myfunct();


?>