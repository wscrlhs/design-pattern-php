<?php

class Employee
{
    public $name;
    public $surName;
    public $salary;

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function setSurName($surName)
    {
        $this->surName = $surName;

        return $this;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;

        return $this;
    }

    public function __toString()
    {
        $employeeInfo = "Name: " . $this->name . PHP_EOL;
        $employeeInfo .= "SurName: " . $this->surName . PHP_EOL;
        $employeeInfo .= "Salary: " . $this->salary . PHP_EOL;

        return $employeeInfo;
    }
}


$employee = new Employee();
$employee->setName('Tom')
    ->setSurName('Smith')
    ->setSalary('100');

echo $employee;
