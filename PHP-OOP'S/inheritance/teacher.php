<?php

class teacher extends University
{
    public $teacher_name;
    public $teacher_age;
    public $subject;
    
    public function __construct($teacher_name, $teacher_age, $subject, University $university)
    {
        $this->teacher_name=$teacher_name;
        $this->teacher_age=$teacher_age;
        $this->subject=$subject;

        $this->university_name=$university->university_name;
        $this->university_address=$university->university_address;
        $this->license_no=$university->license_no;
    }

    public function print_teacher_details()
    {
        echo "Teacher name is : ".$this->teacher_name."<br>";
        echo "Teacher age is : ".$this->teacher_age."<br>";
        echo "Subject is : ".$this->subject."<br>";
    }
}
?>