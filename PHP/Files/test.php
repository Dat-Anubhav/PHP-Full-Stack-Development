<?php

/* 
1) Create CSV Files with Student details
2) Each line in CSV is one Student Details.
3) Read the CSV File and Store the Students details in Array
4) Iterate the Array and Print the Students Table in HTML Format.
*/

$csv = array_map('str_getcsv', file('Test_Folder_4/new_Csv.csv'));

foreach($csv as $line)
{
    echo "<br>".$line[0]." ".$line[1]." ".$line[2]."<br>";
}
?>