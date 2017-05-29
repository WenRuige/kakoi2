<?php
//引入应用文件


require_once dirname(__DIR__) . "/framework/core/Application.php";


//匿名函数加载配置文件
spl_autoload_register(function ($class) {
    //一定要进行路径拆分 \ turn to /
    //check文件是否存在,如果文件存在的话,则引入
    list($pathOne, $pathTwo, $pathThree) = explode("\\", $class);
    $filePath = APP_PATH . "/{$pathOne}/{$pathTwo}/{$pathThree}.php";
    if (file_exists($filePath)) {
        include $filePath;
    }
    //如果文件存在于framework下的话
    $filePath2 = APP_PATH . "/{$pathOne}/{$pathTwo}.php";
    if (file_exists($filePath2)) {
        include $filePath2;
    }
});



$app = new \framework\core\Application();
return $app;


