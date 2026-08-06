<?php

date_default_timezone_set('Asia/Kolkata'); // this will give results in asia kolkata timezone
$nextweek = strtotime("+1 week");

echo "Next week: ". date('y:m:d h:i:s', $nextweek).PHP_EOL."<br>";
?>