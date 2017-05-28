<?php

namespace framework;

class Application
{
    use \kakoi2;


    public function run()
    {

        $this->Mysql();
    }
    //向Mysql内添加配置文件
    public function addConfigToMysql()
    {

    }

    public function fuck()
    {
        echo 'fuck';
    }
}