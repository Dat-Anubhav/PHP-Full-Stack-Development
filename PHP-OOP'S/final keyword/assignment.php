<?php
//Assignments: Create a Bank and User Class and use final Keyword
final class Bank
{
    
    private $name='Reserve Bank of India';

    function bank_name()
    {
        echo "Bank name is : ".$this->name."<br>";
    }
}

/*class User extends Bank//class Bank can not be extended due to final keyword
{
    public $name = 'Anubhav';

    function user_name()
    {
        echo "User name is :".$this->name."<br>";
    }
}

$obj1=new User();

echo $obj1->bank_name();
echo $obj1->user_name();
*/
?>
