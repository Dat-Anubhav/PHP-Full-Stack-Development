<?php
/*
1) List all Files in a Directory
2) Check for Specific Files in a Directory
3) Check If the Name is a Directory or File.
4) Create Directory
5) Copy Files between Directories.
*/

// Sample 1: List all files in a Directory. 
$path = "Test_Folder_1";
$result = scandir($path);

var_Dump($result);
echo "<br><br>";

//  without "." and ".."

foreach($result as $dir)
    {
        if($dir !="." && $dir != "..")
            {
                echo $dir.PHP_EOL."<br>";
            }
    }

// methor 2 for removing "." and ".." from the array

$directory = array_diff($result, ['.','..']);
var_Dump($directory);

foreach($directory as $dir)
    {
        echo $dir.PHP_EOL."<br>";
    }
?>