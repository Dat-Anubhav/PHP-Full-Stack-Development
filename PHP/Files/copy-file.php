<?php

//To copy file from one directory to another first of all check whether the file exists or not. 
//If the file exists then copy the file to another directory.

if(file_exists("Test_Folder_1/Hello.txt"))
    {
        copy("Test_Folder_1/Hello.txt","Test_Folder_2/Hello-2.txt");

    }
else
    {
        echo "<br><br>"."File not found in the directory"."<br>";
    }

?>