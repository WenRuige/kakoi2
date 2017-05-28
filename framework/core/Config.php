<?php

namespace framework\core;
class Config
{


    public static function getConfig($env = 'default', $config)
    {

        $configPath = APP_PATH . "/app/config/config.php";
        if (file_exists($configPath)) {
            $configContent = include $configPath;
            return $configContent[$env][strtolower($config)];

        }
        throw new \ErrorException("No file");
    }
}