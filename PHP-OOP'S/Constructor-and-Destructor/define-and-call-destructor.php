<?php

class Post
{
    

    function __destruct()
    {
        echo "Hello this is an destructor"."<br>";
    }

    function __construct()
    {
        echo "Hello this as a constructor"."<br>";
    }

    // order doesn't matter first constructor will be executed then at last destructor will be excecuted

    //constructor at the beginning and destructor at last
}

$obj = new Post();
?>