<?php

namespace framework\core;

class Application
{


    //使用trait模型
    use \kakoi2;

    private $factory;

    public function __construct()
    {
        $this->factory = new CommonFactory();
    }


    public function run()
    {
        //工厂类拿到传过来的数据


        foreach ($this->methods as $key => $value) {
            //调用方法
            $this->$key;
        }

    }

    //向Mysql内添加配置文件
    public function addConfigToMysql()
    {
        //$this->factory->doFactory(new Mysql());
    }


}