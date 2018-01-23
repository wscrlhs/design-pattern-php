<?php

interface Image
{
    public function getWidth();
}


class RawImage implements Image
{
    public function getWidth()
    {
        // TODO: Implement getWidth() method.
        return "100*100";
    }
}


class ImageProxy implements Image
{
    private $img;

    public function __construct()
    {
        $this->img = new RawImage();
    }

    public function getWidth()
    {
        return $this->img->getWidth();
    }
}


$proxy = new ImageProxy();
$proxy->getWidth();