<?php


namespace framework\core;

class CommonFactory extends Creator
{

    private $common;

    public function FactoryMethod(IFactory $factory)
    {

        return $this->common->getProperties();
    }
}