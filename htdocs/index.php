<?php

error_reporting(E_ERROR);
define("APP_PATH", dirname(__DIR__));
//引入composer加载类
require_once APP_PATH . "/vendor/autoload.php";
//引入核心配置文件 kakoi2
require_once APP_PATH . "/framework/Kakoi2.php";

//引入bootstrap文件
$app = require_once APP_PATH . "/bootstrap/bootstrap.php";


//可以访问绑定在函数内部的数据  1)变量2)方法
$app->addMethod('Mysql', function () {
    return $this->addConfigToMysql();
});

$app->addMethod('Redis', function () {

});
$app->run();



/////////////销毁原生post_get_request///////////////




///////////加载插架//////////////////////


/////////////开始处理路由/////////////








