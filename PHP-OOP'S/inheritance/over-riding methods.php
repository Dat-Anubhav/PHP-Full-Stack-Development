<?php

class p1
{

function hello()
{
    echo "Hello from p1 class";
}
}

class p2 extends p1
{
    function hello()// this will overide the original hello function so 
    //when u call the hello function in object this second overwritten one will get executed or display its output
    {
        echo "Hello from p2 class";//
        parent::hello(); // if u want to use original hello() function
        
    }

    function bye()
    {
        parent::hello();
    }
    
}

$obj1 = new p2();

$obj1->hello();
$obj1->bye();
?>
