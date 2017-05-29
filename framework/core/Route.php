<?php
/**
 * Created by PhpStorm.
 * User: gewenrui
 * Date: 2017/5/29
 * Time: 下午4:12
 */

namespace framework\core;
class Route
{
    private static $requestMethod;

    //加载路由
    public static function init()
    {
        //获取请求的Uri
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = $_SERVER['REQUEST_URI'];


        self::$requestMethod = $method;

        //当前Uri预处理

        //$uri = explode('/', $uri);
        //
        $uri = 'index';
        $urlArray = require_once APP_PATH . "/framework/route/web.php";
        self::pregUrl($uri, $urlArray);

    }


    //匹配路由
    public static function pregUrl($uri, $urlArray)
    {

        if (is_array($urlArray) && !empty($urlArray)) {
            foreach ($urlArray as $key => $value) {
                if ($value[1] == $uri) {
                    self::newFunction($value);
                }

            }

        } else {
            throw new \ErrorException("EMPTY ROUTE");
        }


        //var_dump($urlArray);
    }

    public static function newFunction($value)
    {
        //check请求

        list($method, $route, $Controller, $function) = $value;
        echo '1';

    }
}