<?php
/**
 * Created by PhpStorm.
 * User: gewenrui
 * Date: 2017/5/28
 * Time: 上午11:18
 */

namespace framework;

use framework\core\IFactory;
use FluentPDO;

class Mysql implements IFactory
{

    private $mysqlObj;

    public function getProperties()
    {
        return $this->mysqlObj;

    }

    public function __construct($config)
    {

        try {
            $dsn = "{$config['type']}:dbname={$config['dbname']};host={$config['host']};port={$config['port']}";
            $pdo = new \PDO($dsn, "{$config['user']}", "{$config['pwd']}");
            $this->mysqlObj = new FluentPDO($pdo);


        } catch (\PDOException $exception) {
            //catch pdo error
            echo $exception->getCode() . $exception->getMessage();

        } catch (\Exception $exception) {

        }


    }
}