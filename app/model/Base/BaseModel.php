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

    public function getAll()
    {
        $temp = get_called_class();
        return $temp::TABLE_NAME;
    }

}