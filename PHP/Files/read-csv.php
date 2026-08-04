<?php

// Reading a CSV file
$file = fopen("Test_Folder_3/read.csv","r");

$file_csv = fgetcsv($file);
// print_r(str_getcsv($file));

foreach($file_csv as $line)
{
    echo "<br>".$line."<br>";
}

fclose($file);//always close the file after reading it.

?>