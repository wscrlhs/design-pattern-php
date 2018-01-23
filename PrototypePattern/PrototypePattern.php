<?php

interface Prototype
{
    public function copy();
}


class ConcretePrototype implements Prototype
{
    private $_name;

    public function _construct($name)
    {
        $this->_name = $name;
    }

    public function copy()
    {
        return clone $this;
    }
}

class Demo
{

}


$demo = new Demo();
$object1 = new ConcretePrototype($demo);
$object2 = $object1->copy();

