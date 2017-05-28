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
            //调用方法的正确写法,
            call_user_func(array($this, $key));
            //或者直接使用$this->key();
            //使用拼凑字符串进行调用是错误的.
        }
    }

    //向Mysql内添加配置文件
    public function addConfigToMysql()
    {

        echo '123';
        //$this->factory->doFactory(new Mysql());
    }


}