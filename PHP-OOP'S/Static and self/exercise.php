<?php
/*
Exercise 1: String Operation Helper Static Class

1) Create StringHelper Class
2) Define a method countVowel($content) static method.
3) Count number of vowels in string.
*/

class StringHelper
{
    static function countVowel($content)
    {
        // convert string into an array through str_split()
        $count = 0;
        foreach(str_split($content) as $char)
            {
                if($char == 'a' || $char =='A' || $char =='e' || $char == 'E' || $char =='i' || $char == 'I' || $char == 'o' || $char == 'O' || $char == 'u' || $char == 'U')
                    {
                        $count++;
                    }
            }
        
        echo "Total number of vowels in a $content are $count"."<br>";
    }
}

StringHelper::countVowel("ANUBHAV");// calling the static function
?>