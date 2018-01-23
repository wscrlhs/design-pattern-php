<?php

interface ShowStrategy
{
    public function showCategory();
}


class MaleShowStategy implements ShowStrategy
{

    public function showCategory()
    {
        echo '展示男性商品目录' . PHP_EOL;
    }
}

class FemaleShowStrategy implements ShowStrategy
{

    public function showCategory()
    {
        echo '展示女性商品目录' . PHP_EOL;
    }
}


class Page
{
    private $_strategy;

    public function __construct(ShowStrategy $strategy)
    {
        $this->_strategy = $strategy;
    }


    public function showPage()
    {
        $this->_strategy->showCategory();
    }
}

$_GET['male'] = 1;
if (isset($_GET['male'])) {
    $strategy = new MaleShowStategy();
} elseif (isset($_GET['female'])) {
    $strategy = new FemaleShowStrategy();
}

$page = new Page($strategy);
$page->showPage();