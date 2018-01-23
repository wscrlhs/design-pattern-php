<?php

interface Command
{
    public function excecute();
}


class TurnOnTvCmd implements Command
{

    private $controller;

    public function __construct(Controller $controller)
    {
        $this->controller = $controller;
    }

    public function excecute()
    {
        $this->controller->turnOnTv();
    }
}

class TurnOffTvCmd implements Command
{

    private $controller;

    public function __construct(Controller $controller)
    {
        $this->controller = $controller;
    }

    public function excecute()
    {
        $this->controller->turnOffTv();
    }
}


class Controller
{
    public function turnOnTv()
    {
        echo '打开电视' . PHP_EOL;
    }

    public function turnOffTv()
    {
        echo '关闭电视' . PHP_EOL;
    }
}


$command_string = 'TurnOnTv' . 'Cmd';
$cmd = new  $command_string(new Controller());
$cmd->excecute();
