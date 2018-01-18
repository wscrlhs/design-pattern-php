<?php
require_once 'Car.php';

class Sedan implements Car
{

    public function getType()
    {
        return 'Sedan';
    }

}
