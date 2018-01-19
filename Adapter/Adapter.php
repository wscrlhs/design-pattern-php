<?php

interface DataBase
{
    public function connect();

    public function query();

    public function close();
}


class Mysql implements DataBase
{

    public function connect()
    {
        // TODO: Implement connect() method.
    }

    public function query()
    {
        // TODO: Implement query() method.
    }

    public function close()
    {
        // TODO: Implement close() method.
    }
}

class Pdoo implements DataBase
{

    public function connect()
    {
        // TODO: Implement connect() method.
    }

    public function query()
    {
        // TODO: Implement query() method.
    }

    public function close()
    {
        // TODO: Implement close() method.
    }
}

$database = new Mysql();
$database->connect();
$database->query();
$database->query();


//adapter
class Oracle
{
    public function oracleConnect()
    {

    }

    public function oracleQuery()
    {

    }

    public function oracleClose()
    {

    }
}


class Adapter implements DataBase
{
    private $adapter;

    function __construct($adapter)
    {
        $this->adapter = $adapter;
    }

    public function connect()
    {
        // TODO: Implement connect() method.
        $this->adapter->oracleConnect();
    }

    public function query()
    {
        // TODO: Implement query() method.
        $this->adapter->oracleQuery();
    }

    public function close()
    {
        // TODO: Implement close() method.
        $this->adapter->oracleClose();
    }
}


$adapter = new Adapter(new Oracle());
$database = $adapter;
$database->connect();
$database->query();
$database->query();


