<?php

/*
1) Create a Student Class
2) Create marks as Student Properties
3) Write examResults() Method of Student Class
4) examResults() method accepts 3 subjects marks
5) Passing Marks for each exam is 35 and Maximum Marks is 100 for each subject.
*/

class Students
{
    public $marks;

    public function examResults($phy,$chem,$bio)
    {
        $this->marks=$phy+$chem+$bio;
        
        if($phy>=35 && $chem>=35 && $bio>=35 )
            {
                echo "Student has passed all the exams"."<br>";
            }
        else
            {
                echo "Student got failed in exam"."<br>";
            }
        
        echo "total marks obtaied by the student are = $this->marks/100"."<br>";        
    }
}

$obj=new Students();

echo $obj->examResults(50,45,37);

?>