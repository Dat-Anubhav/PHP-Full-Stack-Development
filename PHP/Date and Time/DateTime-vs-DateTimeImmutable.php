<?php

//DateTime

$startDate = new DateTime("2026-08-06");// can use date_create instead of new DateTime same result

$end_date = $startDate->modify('+7 days');

echo "Start date is: ".$startDate->format('Y-m-d')."<br>";
echo "End date is: ".$end_date->format('Y-m-d')."<br>";

if($startDate === $end_date) {
    echo "This is the problem with DateTime(), both got changed.";
} else {
    echo "The dates are different.";
}

echo "<br><br>";


//DateTimeImmutable

$startDate = new DateTimeImmutable("2026-08-06");// can use date_create_Immutable instead of new DateTimeImmutable same results

$end_date = $startDate->modify('+7 days');

echo "<br>"."Start date is: ". $startDate->format('Y-m-d')."<br>";
echo "End date is: ".$end_date->format('Y-m-d')."<br>";

if($startDate === $end_date) {
    echo "This is the problem with DateTimeImmutable(), both got changed.";
} else {
    echo "<br>"."<b>"."This is profit of DateTimeImmutable(), the original date is preserved.";
}

// That why it is advised to use DateTimeImmutable() instead of DateTime() 
// because it preserves the original date and time, while DateTime() modifies the original object when you call methods like modify().
