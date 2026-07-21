<?php

$male = "john,smith";
$gender = "male";

echo $$gender." is ".$gender

//how it works; first take $$gender it means $($gender)= $(male)= $male = john,smith
?>

<!-- thee $$$ variable of variable -->

<?php

$student = "anubhav,rishu";
$male = "student";
$gender = "male";

echo "<br><br>";

echo $$$gender." ".$$gender." ".$gender
?>