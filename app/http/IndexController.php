<?php
/**
 * Created by PhpStorm.
 * User: gewenrui
 * Date: 2017/5/28
 * Time: 上午9:16
 */

namespace app\http;


use app\model\Index\IndexModel;

class IndexController
{
    public function index()
    {
       
        $res = IndexModel::test();

    }
}