<?php

//read the content in the file

$content = file_get_contents("Test_Folder_1/Hello.txt");

echo "<br>"."$content"."<br>";

// // Method 2 to read the content in the file

// $filereader = fopen("Test_Folder_1/Hello.txt","r");

// echo "<br><br>"."$filereader"."<br><br>";

//rename the file

if(file_exists("Test_Folder_1/Hello.txt"))
    {
        rename("Test_Folder_2/Hello-Again.txt","Test_Folder_2/Hello-again.txt");
        die("File renamed successfully");
    }
else
    {
        echo "<br>"."The file doest not exists in the directory"."<br>";
        die("u fool");
    }
?>