<?php

class Cpu
{
    public function freeze()
    {
    }

    public function jump()
    {
    }

    public function execute()
    {
    }
}


class HardDrive
{
    public function read($boot_sector, $sector_size)
    {
    }
}

class Memory
{
    public function load($boot_address, $hd_data)
    {
    }
}

class ComputerFacade
{
    private $cpu;
    private $ram;
    private $hd;


    public function __construct()
    {
        $this->cpu = new Cpu();
        $this->ram = new Memory();
        $this->hd = new HardDrive();
    }


    public function start()
    {
        $this->cpu->freeze();
        $this->ram->load(BOOT_ADDRESS, $this->hd->read(BOOT_SECTOR, SECTOR_SIZE));
        $this->cpu->jump(BOOT_ADDRESS);
        $this->cpu->execute();
    }
}


$computer = new ComputerFacade();
$computer->start();
