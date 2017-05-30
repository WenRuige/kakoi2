<?php
/**
 * Created by PhpStorm.
 * User: gewenrui
 * Date: 2017/5/29
 * Time: 下午6:26
 */

namespace app\model\Base;

use framework\core\Db;

abstract class BaseModel extends Db
{

    const TABLE_NAME = '';

    public function init()
    {

    }

    //获取表明
    public static function getTableName()
    {
        $temp = get_called_class();
        var_dump($temp);
        return $temp::TABLE_NAME;
    }

    public static function getObject()
    {
        $table = self::getTableName();
        return Db::getInstance()->from($table)->fetchAll();
    }

}