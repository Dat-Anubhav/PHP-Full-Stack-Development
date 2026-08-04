<?php

// Method 1:
$file = fopen("Test_Folder_2/full.txt","w+");

fwrite($file,"This is a modified file");

fclose($file);

// Method 2:

$filehandler = fopen("Test_Folder_2/full.txt","w+");

file_put_contents("Test_Folder_2/full.txt","Hello i am anubhav srivastav"); // This will overwrite the entire file, like fwrite() function. If you want to append the content to the file, then you can use FILE_APPEND flag.

fclose($filehandler);

?>