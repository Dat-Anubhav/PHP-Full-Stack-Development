<?php

// Read an Array from the File

if(file_exists("Test_Folder_3/test.ini"))
    {
        $config = parse_ini_file("Test_Folder_3/test.ini");

        // The parse_ini_file() function is a built-in PHP function used to load a configuration (.ini) file 
        // and return its settings as an associative array.

        foreach($config as $key => $value)
            {
                echo "<br>".$key." = ".$value."<br>";
            }
    }

else
    {
        echo "<br>"."File does not exists"."<br>";
    }

?>