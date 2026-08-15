<?php

final class University
{
   final public $name = 'Boston University';

   public function hello()
   {
    echo "Hello from University class"."<br>";
   }
}

/* class Teacher extends University
{
    public $name = 'Anubhav';

    public function hello2()
    {
        echo "Hello from Teacher class"."<br>";
    }
}

$obj1 = new Teacher();

echo $obj1->hello();
echo $obj1->hello2();
*/
?>