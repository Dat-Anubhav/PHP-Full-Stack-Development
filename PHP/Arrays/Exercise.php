<?php

/*1) Write a Foreach Loop to read this array

[
   "planets" =>
	[
	   "sun" => [ "temp" => "hot", "color" => "red" ],
	   "moon" => [ "temp" => "cold", "color"  => "white" ],
       "earth" => [ "temp" => "normal", "color" => "blue" ]
	]
]	

 */

$arr = [
   "planets" =>
	[
	   "sun" => [ "temp" => "hot", "color" => "red" ],
	   "moon" => [ "temp" => "cold", "color"  => "white" ],
       "earth" => [ "temp" => "normal", "color" => "blue" ]
	]
];

foreach($arr['planets'] as $plan => $info)
    {
        echo "<br>$plan =>";
        foreach($info as $temp=>$color)
            {
                echo "$temp=>$color | ";
            }
    }


?>