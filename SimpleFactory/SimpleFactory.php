<?php

require_once 'Bicycle.php';

class SimpleFactory
{
    public function createBicycle()
    {
        return new Bicycle();
    }

}

$factory = new SimpleFactory();
$bicycle = $factory->createBicycle();

$bicycle->driveTo('Paris');

