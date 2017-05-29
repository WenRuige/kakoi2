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

    public function getProperties()
    {

    }

    public function __construct($config)
    {

        try {
            $dsn = "{$config['type']}:dbname={$config['dbname']};host={$config['host']};port={$config['port']}";
            $pdo = new \PDO($dsn, "{$config['user']}", "{$config['pwd']}");
            $fpdo = new FluentPDO($pdo);
            return $fpdo;

        } catch (\PDOException $exception) {
            //catch pdo error
            echo $exception->getCode() . $exception->getMessage();

        } catch (\Exception $exception) {

        }


    }
}