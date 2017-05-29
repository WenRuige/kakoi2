<?php


namespace framework\core;

class CommonFactory extends Creator
{

    private $common;
    //父类声明,子类来实现
    public function FactoryMethod(IFactory $factory)
    {

        $this->common = $factory;
        return $this->common->getProperties();
    }
}