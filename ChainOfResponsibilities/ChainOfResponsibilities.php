<?php

abstract class TranslationResponsibility
{
    protected $next;
    protected $translator;

    public function setNext($l)
    {
        $this->next = $l;
        return $this;
    }


    public function canTranslate($input)
    {
        return $this->translator == $this->check($input);
    }


    public function check($input)
    {

    }

    abstract public function translate($input);
}


class EnglishTranslator extends TranslationResponsibility
{

    public function __construct()
    {
        $this->translator = 'English';
    }

    public function translate($input)
    {
        // TODO: Implement translate() method.

        if (!is_null($this->next) && !$this->canTranslate($input)) {
            $this->next->translate($input);
        } else {

        }
    }
}

class FrenchTranslator extends TranslationResponsibility
{

    public function __construct()
    {
        $this->translator = 'French';
    }

    public function translate($input)
    {
        // TODO: Implement translate() method.

        if (!is_null($this->next) && !$this->$this->canTranslate($input)) {
            $this->next->translate($input);
        } else {

        }
    }
}


$res_a = new EnglishTranslator();
$res_b = new FrenchTranslator();
$res_a->setNext($res_b);

$res_a->translate('Bonjour');
