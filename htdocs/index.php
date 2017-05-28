<?php

//引入核心配置文件 kakoi2
require dirname(__DIR__) . "/framework/kakoi2.php";


$app = require_once dirname(__DIR__) . "/bootstrap/bootstrap.php";




$app->addMethod('Mysql', function () {
    return $this->test;
});


$app->run();





