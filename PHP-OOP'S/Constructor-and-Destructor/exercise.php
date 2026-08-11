<?php
/*
1) Write File Class
2) Pass the filename to Constructor
3) Check if the fileexists in constructor
4) If file is found then open the file using fopen method
5) Write method getContent to get the content of the file
6) Write Destructor method to close the file if file is already opened.
*/

class File
{
    public $file_read;
    public $file_handle;

    function __construct($filename)
    {
        $this->file_read=$filename;

        /*
        $filename only exists inside the constructor.
        Variable Scope
In PHP, variables have scope - they only exist within the block where they're defined.
*/

        if(file_exists($filename))
            {
                $this->file_handle= fopen("$filename","r");
            }
    }//$filename parameter dies here thats why we have to store it into a file read

    public function getContent()
    {
        if($this->file_handle)
            {
                return file_get_contents($this->file_read);
            }

            return "file not found";
    }

    function __destruct()
    {
        if($this->file_handle)
            {
                fclose("$this->file_handle");
            }
    }
}

$obj=new File("exercise/test.txt");

echo $obj->getContent();
?>