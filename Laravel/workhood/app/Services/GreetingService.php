<?php
namespace App\Services;

class GreetingService
{
    function greet(string $name): string
    {
        return "Hello $name";
    }
}


?>