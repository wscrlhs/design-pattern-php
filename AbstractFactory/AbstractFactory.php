<?php

abstract class Button
{
    abstract function click();
}

abstract class Border
{
}

class MacButton extends Button
{
    public function click()
    {
        // TODO: Implement click() method.
        echo "click Button on mac";
    }
}

class WinButton extends Button
{
    public function click()
    {
        // TODO: Implement click() method.
        echo "click button on win";
    }
}

class MacBorder extends Border
{
}

class WinBorder extends Border
{
}

interface AbstractFactory
{
    public function CreateButton();

    public function CreateBorder();
}

class MacFactory implements AbstractFactory
{
    public function CreateButton()
    {
        return new MacButton();
    }

    public function CreateBorder()
    {
        return new MacBorder();
    }
}

class WinFactory implements AbstractFactory
{
    public function CreateButton()
    {
        return new WinButton();
    }

    public function CreateBorder()
    {
        return new WinBorder();
    }
}

$mac = new MacFactory();
$macButton = $mac->CreateButton();
$macButton->click();

$win = new WinFactory();
$winButton = $win->CreateButton();
$winButton->click();