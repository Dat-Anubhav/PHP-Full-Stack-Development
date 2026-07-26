<?php
$arr=[
    'one'=>1,
    'two'=>2,
    'three'=>3,
    'four'=>4];

echo $arr['one']."<br>";

foreach($arr as $k=>$v)
    {
        //No hidden space after EOD, and closing tag is flush-left
        echo <<<DOC_LABEL
        key is: $k and value is: $v.<br> 
        DOC_LABEL;
    };

echo "<br><br>";

var_dump("The array is: $arr");
?>