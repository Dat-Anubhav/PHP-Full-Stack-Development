<?php
//Reading a file line by line

$file_read= file("Test_Folder_2/full.txt");

foreach($file_read as $line)
    {
        echo "<br>".$line."<br>";
    }
?>