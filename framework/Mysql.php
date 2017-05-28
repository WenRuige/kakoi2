<?php
/**
 * Created by PhpStorm.
 * User: gewenrui
 * Date: 2017/5/28
 * Time: 上午11:18
 */

namespace framework;
class Mysql implements IFactory
{

    public function getProperties()
    {

    }

    public function __construct()
    {
        echo 'this is mysql';
    }
}