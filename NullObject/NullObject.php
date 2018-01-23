<?php

interface Animal
{
    public function makeSound();
}

class Dog implements Animal
{

    public function makeSound()
    {
        echo 'Woof..';
    }
}

class Cat implements Animal
{

    public function makeSound()
    {
        echo 'Meowww..';
    }
}

class NullAnimal implements Animal
{

    public function makeSound()
    {
        // silence
    }
}


$animalType = 'elephant';
switch ($animalType) {
    case 'dog':
        $animal = new Dog();
        break;
    case 'cat':
        $animal = new Cat();
        break;
    default:
        $animal = new NullAnimal();
        break;
}

$animal->makeSound();