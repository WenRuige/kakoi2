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
    //引入主程序目录
    list($pathOne, $pathTwo, $pathThree, $pathFour) = explode("\\", $class);
    $filePath3 = APP_PATH . "/{$pathOne}/{$pathTwo}/{$pathThree}/{$pathFour}.php";

    if (file_exists($filePath3)) {
        include $filePath3;
    }

});

$app = new \framework\core\Application();
return $app;


