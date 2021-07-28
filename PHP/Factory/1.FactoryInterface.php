<?php
/**
 * 面向接口编程
 *  只规范了产品
 */

/**
 * 数据库接口
 *
 * Interface DB
 */
interface DB
{
    public function conn();
}

/**
 * MySQL 实现了 DB 接口
 *
 * Class MySQL
 */
class MySQL implements DB
{
    public function conn()
    {
        echo '连上了 MySQL';
    }
}

/**
 * SQLite 实现了 DB 接口
 *
 * Class SQLite
 */
class SQLite implements DB
{
    public function conn()
    {
        echo '连上了 SQLite';
    }
}

// 使用
$db = new MySQL();
$db->conn();
// 暴露了太多
