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
        //当前Uri预处理   假设当前没有传参数过来,easy way
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
                    //如果匹配到则退出
                    self::newFunction($value);
                    exit();
                }

            }
            //如果没有匹配到路由也抛出错误
            throw new \ErrorException('ERROR');
        } else {
            throw new \ErrorException("EMPTY ROUTE");
        }
    }
    //实例化方法
    public static function newFunction($value)
    {
        //check请求

        list($method, $route, $Controller, $function) = $value;
        //请求方法是否是一致的
        if (!self::$requestMethod == $method) {
            throw new \ErrorException('Request ERROR');
        }
        //调用spl加载规则
        self::loadingRoute($Controller, $function);

    }
    //加载路由
    public static function loadingRoute($Controller, $function)
    {


        $filePath = APP_PATH . "app/http/{$Controller}.php";
        if (file_exists($filePath)) {
            include $filePath;
        }

        $str = "\\app\\http\\{$Controller}";
        $data = new $str();
        $data->$function();
    }

}