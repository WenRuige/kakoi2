<?php
/**
 * Created by PhpStorm.
 * User: gewenrui
 * Date: 2017/5/29
 * Time: 下午6:00
 */

namespace framework\core;
class Db
{


    protected static $mysqlObj;

    public function __construct($Mysql)
    {
        self::$mysqlObj = $Mysql;
    }

    protected static $_instance;

    //单利模式
    public static function getInstance()
    {
        if (self::$_instance instanceof self) {
            return self::$_instance;
        } else {
            return self::getObj();
        }
    }

    public function getObj()
    {
        return self::$mysqlObj;
    }

}