<?php

interface FormatterInferface
{
    public function format(string $text);
}

class PlainTextFormatter implements FormatterInferface
{

    public function format(string $text)
    {
        // TODO: Implement format() method.
        return $text;
    }
}

class HtmlFormatter implements FormatterInferface
{

    public function format(string $text)
    {
        // TODO: Implement format() method.
        return sprintf('<p>$s</p>', $text);
    }
}


abstract class Service
{
    protected $implementation;

    public function __construct(FormatterInferface $formatterInferface)
    {
        $this->implementation = $formatterInferface;
    }

    abstract public function getImplementation();

    /**
     * @param FormatterInferface $implementation
     */
    public function setImplementation(FormatterInferface $implementation)
    {
        $this->implementation = $implementation;
    }

}


class HelloService extends Service
{
    public function getImplementation(): string
    {
        return $this->implementation->format('Hello world!');
    }
}


$service = new HelloService(new PlainTextFormatter());
echo $service->getImplementation();

$service->setImplementation(new HtmlFormatter());
echo $service->getImplementation();