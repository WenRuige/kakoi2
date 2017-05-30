<?php


namespace app\model\Index;


use app\model\Base\BaseModel;

class IndexModel extends BaseModel
{
    CONST TABLE_NAME = 'test_number';


    public static function test(){

        return  IndexModel::getObject();

    }

}