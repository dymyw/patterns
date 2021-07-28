<?php

/**
 * 简单工厂模式
 *
 * Class SimpleFactory
 */
class SimpleFactory
{
    /**
     * 获取数据库实例
     *
     * @param $type
     * @return DB
     * @throws Exception
     */
    public static function createDB($type): DB
    {
        /**
         * 违背开闭原则
         *  新增类型需要修改原来的代码（工厂），需要优化
         *  需要编译的语言费时、麻烦
         */
        switch ($type) {
            case 'mysql':
                return new MySQL();

            case 'sqlite':
                return new SQLite();

            default:
                throw new Exception('DB type error!');
        }
    }
}

// 使用
try {
    $db = SimpleFactory::createDB('mysql');
    $db->conn();
} catch (Exception $e) {
    // ...
}
