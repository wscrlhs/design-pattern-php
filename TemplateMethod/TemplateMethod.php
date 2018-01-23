<?php

abstract class Journey
{

    private $thingsToDo = [];

    final public function takeATrip()
    {
        $this->thingsToDo[] = $this->buyAFlight();
        $this->thingsToDo[] = $this->takePlane();
        $this->thingsToDo[] = $this->enjoyVacation();

        $buyGift = $this->buyGift();
        if ($buyGift !== null) {
            $this->thingsToDo[] = $buyGift;
        }

        $this->thingsToDo[] = $this->takePlane();
    }


    abstract protected function enjoyVacation(): string;

    protected function buyGift()
    {
        return null;
    }

    private function buyAFlight(): string
    {
        return 'Buy a flight ticket';
    }

    private function takePlane(): string
    {
        return 'Taking the plane';
    }


    public function getThingsToDo(): array
    {
        return $this->thingsToDo;
    }
}


class BeachJourney extends Journey
{

    protected function enjoyVacation(): string
    {
        // TODO: Implement enjoyVacation() method.
        return 'Swimming and sun-bathing';
    }
}

class CityJourney extends Journey
{

    protected function enjoyVacation(): string
    {
        // TODO: Implement enjoyVacation() method.
        return "Eat ,drink, take photos and sleep";
    }

    protected function buyGift(): string
    {
        return 'Buy a gift';
    }
}

$beach = new BeachJourney();
$beach->takeATrip();
print_r($beach->getThingsToDo());

$city = new CityJourney();
$city->takeATrip();
print_r($city->getThingsToDo());