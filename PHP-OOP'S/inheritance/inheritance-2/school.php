<?php

class School
{
    public $school_name;
    public $city;

    function __construct($school_name,$city)
    {
        $this->school_name=$school_name;
        $this->city=$city;
    }

    public function print_school_details()
    {
        echo "School name is ".$this->school_name."<br>";
        echo "City is : ".$this->city."<br>";
    }
}
?>