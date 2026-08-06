<?php

 /*
        h - Represent hour in 12-hour format with leading zeros (01 to 12)
        H - Represent hour in in 24-hour format with leading zeros (00 to 23)
        i - Represent minutes with leading zeros (00 to 59)
        s - Represent seconds with leading zeros (00 to 59)
        a - Represent lowercase ante meridiem and post meridiem (am or pm)
        A - Represent uppercase Ante meridiem and Post meridiem (AM or PM)


        Format Specifier,Meaning,Example Output

Y / y,   4-digit year / 2-digit year,2026 / 26
m / n,   Month with leading zeros / without,08 / 8
F / M,   Full month name / 3-letter abbreviation,August / Aug
d / j,   Day with leading zeros / without,06 / 6
H / h,   24-hour format / 12-hour format,13 / 01
i,       Minutes with leading zero,05
s,       Seconds with leading zero,09
A / a,Uppercase / lowercase AM/PM,PM / pm

*/
echo "Current timezone is: ".date_default_timezone_get()."<br>"; 
echo "New timezone is: Asia/Kolkata"."<br>";
date_default_timezone_set('Asia/Kolkata'); // this will give results in asia kolkata timezone
echo "Current date and time: " . date('y-m-d h:i:s')."<br>";

echo "The current time in miliseconds is : ". time().PHP_EOL."<br>";

$time = time();

echo "The current date and time after 1000 seconds is : " . date('y-m-d h:i:s', $time)."<br>";
?>