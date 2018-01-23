<?php

interface RenderableInterface
{
    public function render(): string;
}


class Form implements RenderableInterface
{

    private $element;

    public function render(): string
    {
        $formCode = '<form>';

        foreach ($this->element as $element) {
            $formCode .= $element->render();
        }

        $formCode .= '</form>';
        return $formCode;
    }

    public function addElement(RenderableInterface $element)
    {
        $this->element[] = $element;
    }

}


class TextElement implements RenderableInterface
{
    private $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function render(): string
    {
        return $this->text;
    }
}

class InputElement implements RenderableInterface
{

    public function render(): string
    {
        return '<input type="text" />';
    }
}


$form = new Form();
$form->addElement(new TextElement('Email'));
$form->addElement(new InputElement());

$form->addElement(new TextElement('Password'));
$form->addElement(new InputElement());

echo $form->render();