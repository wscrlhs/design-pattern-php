<?php

abstract class EventGenerator
{

    private $observers;

    public function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }


    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }
}

class Event extends EventGenerator
{
    public function trigger()
    {
        echo 'Event' . PHP_EOL;
        $this->notify();
    }
}

interface Observer
{
    public function update($event_info = null);
}

class Observer1 implements Observer
{

    public function update($event_info = null)
    {
        echo "逻辑1" . PHP_EOL;
    }
}

class Observer2 implements Observer
{

    public function update($event_info = null)
    {
        echo "逻辑2" . PHP_EOL;
    }
}


$event = new Event();
$event->addObserver(new Observer1());
$event->addObserver(new Observer2());
$event->trigger();
