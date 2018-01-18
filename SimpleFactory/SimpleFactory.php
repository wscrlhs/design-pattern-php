<?php

class Bicycle
{
    public function driveTo(string $destination)
    {
        return $destination;
    }
}

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

