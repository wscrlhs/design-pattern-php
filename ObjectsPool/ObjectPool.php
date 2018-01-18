<?php

class ObjectPool
{
    private $instance = [];

    public function get($key)
    {
        if (isset($this->instance[$key])) {
            return $this->instance[$key];
        } else {
            $item = $this->make($key);
            $this->instance[$key] = $item;
            return $item;
        }
    }


    public function add($object, $key)
    {
        $this->instance[$key] = $object;
    }

    public function make($key)
    {
        if ($key == 'mysql') {
            return new Mysql();
        } elseif ($key == 'socket') {
            return new Socket();
        }
    }
}


$pool = new ObjectPool();
$pool->get('mysql');
