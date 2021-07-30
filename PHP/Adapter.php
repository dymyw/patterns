<?php

/**
 * 适配器模式(Adapter Pattern)
 *  将一个类的接口转换成客户希望的另外一个接口，常用于需要使用第三方组件接口的功能
 *
 * @example 安卓充电器（Adaptee）通过一个转换头（Adapter）为 Iphone（Client）充电（request）
 */

/**
 * 充电器接口
 *
 * Interface Charger
 */
interface Charger
{
    public function charge();
}

/**
 * 手机
 *
 * Class Phone
 */
class Phone
{
    protected $charger;

    public function setCharger(Charger $charger)
    {
        $this->charger = $charger;

        return $this;
    }

    public function charge()
    {
        return $this->charger->charge();
    }
}

/**
 * 安卓充电器
 *
 * Class Adaptee
 */
class Adaptee
{
    public function exec()
    {
        return '执行充电操作';
    }
}

/**
 * 适配器
 *
 * Class Adapter
 */
class Adapter implements Charger
{
    protected $adaptee;

    public function __construct($adaptee)
    {
        $this->adaptee = $adaptee;
    }

    public function charge()
    {
        return $this->adaptee->exec();
    }
}

// 使用
$phone      = new Phone();
$charger    = new Adapter(new Adaptee());
echo $phone->setCharger($charger)->charge();
