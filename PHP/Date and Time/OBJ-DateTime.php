<?php
$date = "2026-08-06";
$current_date = new DateTime($date);

echo "Current date is: ".$date."<br>";

echo "Current date with new format(d-m-Y) is: "." ".$current_date->format('d-m-Y');
?>