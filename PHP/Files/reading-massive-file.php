<?php

$file = fopen("Test_Folder_2/full.txt","r"); // r means read only. 
// we can also use w for write, a for append, r+ for read and write, w+ for write and read, a+ for append and read.

while(!feof($file))
    {// feof means file end of file. and while(!feof($file)) While we have NOT reached the end of the file, keep looping.
        echo "<br>".fgets($file)."<br>"; // if u use fread then u have to specify the length of the file to read. fgets reads one line at a time.
    }

    fclose($file);//always close the file after reading it.
?>
