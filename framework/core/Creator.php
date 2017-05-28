<?php

abstract class Creator
{
    //抽象函数不可以实现
    abstract public function FactoryMethod(IFactory $IFactory);

    //返回工厂方法
    public function doFactory($container)
    {
        return $this->FactoryMethod($container);
    }


}