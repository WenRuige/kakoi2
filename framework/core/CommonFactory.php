<?php


namespace framework\core;

class CommonFactory extends Creator
{

    private $common;

    public function FactoryMethod(IFactory $factory)
    {

        $this->common = $factory;
        return $this->common->getProperties();
    }
}