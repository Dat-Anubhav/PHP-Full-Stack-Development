<?php

class University
{
    public $university_name;
    public $university_address;
    public $license_no;

    function __construct($university_name,$university_address,$license_no)
    {
        $this->university_name=$university_name;
        $this->university_address=$university_address;
        $this->license_no=$license_no;
    }

    public function print_university_details()
    {
        echo "University name is : ".$this->university_name."<br>";
        echo "University address is ".$this->university_address."<br>";
        echo "License number is :".$this->license_no."<br>";
    }
}
?>