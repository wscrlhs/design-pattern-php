<?php

interface Car
{
    public function getType();
}

interface CarFactory
{
    public function makeCar();
}

class Sedan implements Car
{

    public function getType()
    {
        return 'Sedan';
    }
}

class SedanFactory implements CarFactory
{
    public function makeCar()
    {
        return new Sedan();
    }

}

$factory = new SedanFactory();
$car = $factory->makeCar();
$car->getType();