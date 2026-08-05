<?php

 /*
        h - Represent hour in 12-hour format with leading zeros (01 to 12)
        H - Represent hour in in 24-hour format with leading zeros (00 to 23)
        i - Represent minutes with leading zeros (00 to 59)
        s - Represent seconds with leading zeros (00 to 59)
        a - Represent lowercase ante meridiem and post meridiem (am or pm)
        A - Represent uppercase Ante meridiem and Post meridiem (AM or PM)
     */

echo "Current date and time: " . date('y-m-d h:i:s')."<br>";

echo "The current time in miliseconds is : ". time().PHP_EOL."<br>";

$time = time() + 1000;

echo "The current date and time after 1000 seconds is : " . date('y-m-d h:i:s', $time)."<br>";
?>