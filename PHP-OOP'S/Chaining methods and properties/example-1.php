<?php

class Chain
{
    public function method1()
    {
        echo "Hi this is Method 1"."<br>";
        return $this;
    }

    public function method2()
    {
        echo "Hi this is Method 2"."<br>";
        return $this;// to chain a method return $this in that method
    }
}

$obj = new Chain();

echo $obj->method2()->method1();// Method Chaining
?>