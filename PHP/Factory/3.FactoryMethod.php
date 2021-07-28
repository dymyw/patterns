<?php
/**
 * 通过扩展工厂实体的方式来创建不同的实例
 *  暴露有哪些工厂（MySQLFactory、SQLiteFactory ...）
 *  暴露工厂生产的规范（Factory）
 *  暴露产品的规范（DB）
 * 开闭原则（多态）O
 *
 * 同时规范了工厂、也规范了产品（最常使用）
 */

/**
 * 暴露工厂生产的规范
 *
 * Interface Factory
 */
interface Factory
{
    public function createDb(): DB;
}

/**
 * MySQLFactory 实现了 Factory 接口
 *
 * Class MySQLFactory
 */
class MySQLFactory implements Factory
{
    public function createDb(): DB
    {
        return new Mysql();
    }
}

/**
 * SQLiteFactory 实现了 Factory 接口
 *
 * Class SQLiteFactory
 */
class SQLiteFactory implements Factory
{
    public function createDb(): DB
    {
        return new Sqlite();
    }
}

// 使用
$factory = new MySQLFactory();
$db = $factory->createDb()->conn();
