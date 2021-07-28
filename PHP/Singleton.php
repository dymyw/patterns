<?php
/**
 * 单例模式（Singleton Pattern）
 *  自行创建，并向整个系统提供唯一的实例
 *
 * 实现原理：空指针，只赋值一次实例（实例只创建一次）
 */

/**
 * 如何保证实例只有一个呢？
 *  禁止外部 new
 *  禁止子类重写构造函数 __construct()
 *  内部创建实例需要判断
 *  禁止外部 clone
 *  禁止子类重写 __clone()
 *  禁止外部反序列化 __wakeup()
 *  禁止子类重写 __wakeup()
 */

/**
 * Class Singleton
 */
class Singleton
{
    protected static $instance = null;

    /**
     * 自行创建唯一的实例
     *
     * @return Singleton
     */
    public static function getInstance()
    {
        // 内部创建实例需要判断
        if (self::$instance == null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * protected: 禁止外部 new
     * final: 禁止子类重写构造函数 __construct()
     */
    final protected function __construct()
    {
    }

    /**
     * protected: 禁止外部 clone
     * final: 禁止子类重写 __clone()
     */
    final protected function __clone()
    {
    }

    /**
     * 禁止外部反序列化 __wakeup()
     *
     * private 只是报 Warning，改成 public 并返回一个错误
     */
    final public function __wakeup()
    {
        user_error('Serialize is not allow.', E_USER_ERROR);
    }
}

$a = Singleton::getInstance();
$b = unserialize(serialize($a));
//$b = clone $a;

// 只有两个对象是同一个对象，=== 才成立
if ($a === $b) {
    echo '同一对象';
} else {
    echo '不是同一对象';
}
