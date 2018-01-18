<?php
require_once 'CarFactory.php';
require_once 'Sedan.php';

class SedanFactory implements CarFactory
{
    public function makeCar()
    {
        return new Sedan();

    }

}

$factory = new SedanFactory();
$car = $factory->makeCar();

print_r($car->getType());
