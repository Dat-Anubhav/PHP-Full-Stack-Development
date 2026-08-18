<?php

class Post
{
    private $post;

    function setter($post) //: void   ||void is a return type declaration that specifies a function must not return any value. 
    {
        $this->post=$post;
        return $this;// method chaining
    }

    function getter()
    {
        echo "No. of Post's are = ".$this->post."<br>";
        return $this;
        // return $this->post."<br>";
        // return $this;//method chaining 

        /*
        you can use multiple return statements inside a single method, but only one of them will ever execute.
        As soon as PHP hits a return statement, the method immediately stops running and exits. 
        Any code or other return statements written below that executed line are completely ignored
        
        To use multiple returns effectively, you must place them inside conditional blocks like if/else or switch statements.
        */

        // That's why getter canot be chained, if u want to chaina getter then use echo instead of return and then return $this to chain the getter
    }

    function name($name)
    {
        echo "The name is $name"."<br>";
        return $this;
    }
}

$obj = new Post();

// Method Chaining
$obj->setter(10)->getter()->name("Anubhav");



?>