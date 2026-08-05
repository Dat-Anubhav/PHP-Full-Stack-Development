<?php
// 1) Create a File, Write Content and Save the File.
// 2) Use fopen libraries
// 3) Append some text in the last.

if(!file_exists("Test_Folder_4"))
    {
        mkdir("Test_Folder_4");
    }

else
    {
        echo "The Directory already exists";
        goto b;
    }

$file = fopen("Test_Folder_4/test.txt", "w");

fwrite($file, "Hi i am anubhav srivastav");

print_r(file_get_contents("Test_Folder_4/test.txt"));

fclose($file);

b:
{
$file_append = fopen("Test_Folder_4/test.txt","a");

echo "<br><br>"."The content of the file is: "."<br><br>";

fwrite($file_append, "This is an appended text");

print_r(file_get_contents("Test_Folder_4/test.txt"));

fclose($file_append);
}
?>