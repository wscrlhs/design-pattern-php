<?php


class Shop
{

    private $handler;

    public $state;

    public function __construct()
    {
        $this->state = 'male';
        $this->handler = new MaleHandler();
    }

    public function setHandler(Handler $handler)
    {
        $this->handler = $handler;
    }

    public function show()
    {
        $this->handler->handle($this);
    }
}

interface Handler
{
    public function handle(Shop $shop);
}

class MaleHandler implements Handler
{

    public function handle(Shop $shop)
    {
        if ($shop->state == 'male') {
            echo '展示男性商品目录' . PHP_EOL;
        } else {
            $shop->setHandler(new FemaleHandler());
            $shop->show();
        }
    }
}

class FemaleHandler implements Handler
{

    public function handle(Shop $shop)
    {
        if ($shop->state == 'female') {
            echo '展示女性商品目录' . PHP_EOL;
        } else {
            $shop->setHandler(new MaleHandler());
            $shop->show();
        }
    }
}


$shop = new Shop();
$shop->state = 'male';
$shop->show();


$shop->state = 'female';
$shop->show();
