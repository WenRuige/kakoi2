<?php
//引入应用文件


require_once dirname(__DIR__) . "/framework/core/Application.php";


//加载配置文件
spl_autoload_register(function ($class) {
    //check文件是否存在,如果文件存在的话,则引入
    list($pathOne, $pathTwo,$pathThree) = explode("\\", $class);

    $filePath = APP_PATH . "/{$pathOne}/{$pathTwo}/{$pathThree}.php";

    if (file_exists($filePath)) {
        include $filePath;
    }
});
$app = new \framework\core\Application();

return $app;


