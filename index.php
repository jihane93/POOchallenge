<?php

require_once 'car.php' ;
require_once 'bike.php';

$teenageCar = new Car('yellow', 4,'diesel fuel');
$teenageCar->setNbWheels(4);
$teenageCar->setCurrentSpeed(160);
$teenageCar->start();


echo $teenageCar->start() . '<br>';
echo $teenageCar->forward();
echo '<br>The speed is : ' . $teenageCar->setCurrentSpeed() . ' km/h' . '<br>';
echo $teenageCar->brake();
echo '<br> The speed is '. $teenageCar->setCurrentSpeed() . ' km/h' . '<br/>';


$bike = new Bicycle('black');
echo $bike->forward();
echo '<br> The speed is '. $bike->setCurentSpeed() . ' km/h' . '<br/>';
echo $bike->brake();
echo '<br> The speed is '. $bike->setCurentSpeed() . ' km/h' . '<br/>';

?>