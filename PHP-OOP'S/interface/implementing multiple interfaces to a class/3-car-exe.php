<?php

require_once '1-car.php';
require_once '2-sports-car.php';
require_once '4-Car-Model.php';

$obj1 = new Sports_car();

echo $obj1->speed();
echo $obj1->increase_Speed();
echo $obj1->decrease_speed();
echo $obj1->model();
echo $obj1->specification();
?>