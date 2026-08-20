<?php

spl_autoload_register(function ($cl){
    echo "The file name is ".$cl."<br>".PHP_EOL;

    require_once "$cl.php";
});

$obj1= new disco\File();

$obj1->hello();

$obj2=new disco\Db();

$obj2->hello();
?>