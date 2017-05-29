<?php
/**
 * Created by PhpStorm.
 * User: gewenrui
 * Date: 2017/5/29
 * Time: 下午4:12
 */

namespace framework\core;
use app\http\IndexController;

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

        $uri = explode('/', $uri)[1];
        $urlArray = require_once APP_PATH . "/framework/route/web.php";
        self::pregUrl($uri, $urlArray);

    }


    //匹配路由
    public static function pregUrl($uri, $urlArray)
    {

        if (is_array($urlArray) && !empty($urlArray)) {
            foreach ($urlArray as $key => $value) {
                if ($value[1] == $uri) {
                    return self::newFunction($value);
                }

            }
            //如果没有匹配到路由也抛出错误
            throw new \ErrorException('ERROR');
        } else {
            throw new \ErrorException("EMPTY ROUTE");
        }


        //var_dump($urlArray);
    }

    public static function newFunction($value)
    {
        //check请求

        list($method, $route, $Controller, $function) = $value;
        //请求方法是否是一致的
        if (!self::$requestMethod == $method) {
            throw new \ErrorException('Request ERROR');
        }
        //调用spl加载规则
        self::loadingRoute();

    }

    public static function loadingRoute()
    {

        include APP_PATH."app/http/IndexController.php";

        $data = new IndexController();

    }

}