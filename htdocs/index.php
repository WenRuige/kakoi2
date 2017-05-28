<?php


//引入composer加载类
require_once dirname(__DIR__) . "/vendor/autoload.php";
//引入核心配置文件 kakoi2
require dirname(__DIR__) . "/framework/Kakoi2.php";

//引入bootstrap文件
$app = require_once dirname(__DIR__) . "/bootstrap/bootstrap.php";


//可以访问绑定在函数内部的数据  1)变量2)方法
$app->addMethod('Mysql', function () {
    return $this->addConfigToMysql();
});


$app->addMethod('Redis', function () {

});


$app->run();





