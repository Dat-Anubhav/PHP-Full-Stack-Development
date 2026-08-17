<?php

trait company1
{
    function get_tot_emp()
    {
        echo "500"."<br>";
    }

    function get_tot_project(): int// if use echo it will give fatal arreo and further script will not be executed 
    //although no message on screen but further program will not be executed because it expects a return a integer here.
    {
        return  10;// return 10 and function breaks here

        //The method get_tot_emp2() is not executed because PHP scripts execute sequentially (line by line), 
        // and a Fatal Error immediately stops the entire program.
    }
}

trait company2
{
    function get_tot_emp2()
    {
        echo "700"."<br>";
    }
}

class company
{
    use company1;
    use company2;
}

$obj = new company();

$obj->get_tot_emp();
echo $obj->get_tot_project();
$obj->get_tot_emp2();
?>