<?php
// file name and class name should be same it is a good practice to follow

class Bike
{
    public $name;
    public $milage;
    public $gear;
    
    function set_name($bike_name)
    {
        $this->name=$bike_name;
    }

    function set_milage($bike_milage)
    {
        $this->milage=$bike_milage;
    }

    function set_gear($bike_gear): int
    {
        return $this->gear=$bike_gear;
    }
}

$bike_obj= new Bike();

$bike_obj->set_name('BMW');
$bike_obj->set_milage('22km/l');
$bike_obj->set_gear(4);

echo "The bike name is : "." ".$bike_obj->name."<br>"."Its milage is :"." ".$bike_obj->milage."<br>";
echo "bike has gears: ".$bike_obj->gear;

?>