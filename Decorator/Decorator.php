<?php

class PlainCoffee
{

    private $decorators;

    public function addDecorator($decorator)
    {
        $this->decorators[] = $decorator;
    }

    public function before()
    {
        foreach ($this->decorators as $decorator) {
            $decorator->before();
        }

    }

    public function after()
    {

        foreach ($this->decorators as $decorator) {
            $decorator->after();
        }
    }

    public function makeCoffee()
    {
        $this->before();
        $this->addCoffee();
        $this->after();
    }

    public function addCoffee()
    {
        echo 'make coffee ';
    }
}


class SweetCoffeeDecorator
{
    public function before()
    {
        echo 'prepare sugar ';
    }

    public function after()
    {
        $this->addSugar();
    }

    public function addSugar()
    {
        echo 'add sugar ';
    }
}

class MilkCoffeeDecorator
{
    public function before()
    {
        echo 'prepare milk ';
    }

    public function after()
    {
        $this->addMilk();
    }

    public function addMilk()
    {
        echo 'add milk ';
    }
}


$coffee = new PlainCoffee();
$coffee->addDecorator(new SweetCoffeeDecorator());
$coffee->addDecorator(new MilkCoffeeDecorator());
$coffee->makeCoffee();




