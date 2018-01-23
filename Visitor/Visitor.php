<?php

interface Visitor
{

}

class Unit
{

    public function accept(Visitor $visitor)
    {
        $method = 'visit' . get_class($this);
        if (method_exists($visitor, $method)) {
            $visitor->$method($this);
        }
    }
}


class User extends Unit
{
    public function getName()
    {

    }
}


class GetPhoneVisitor implements Visitor
{
    public function visitUser()
    {

    }
}


$user = new User();
$user->getName();

$user->accept(new GetPhoneVisitor());