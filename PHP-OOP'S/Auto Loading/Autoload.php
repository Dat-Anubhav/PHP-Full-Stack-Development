<?php

//This is called automatically from PHP when resource not found or registered.
spl_autoload_register(function ($cl){

echo "The file name is "."$cl"."<br>";
require_once "$cl.php";
});

//$cl act as File and Db
$obj1 = new File();
$obj1->hello();

$obj2=new Db();

echo "<br>";

$obj2->hello();
?>