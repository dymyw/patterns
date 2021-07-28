<?php
/**
 * 组合思想
 * 优点：增加固定类型产品的不同具体工厂比较方便
 *
 * 可以组织多个不同的 抽象工厂类 AbstractFactory 来构建不同的工厂
 *
 * 应用场景
 *  广告（首页广告、商详页广告...）
 */

/**
 * TV 产品规范
 *
 * Interface TV
 */
interface TV
{
    public function open();
    public function watch();
}

/**
 * PC 产品规范
 *
 * Interface PC
 */
interface PC
{
    public function work();
    public function play();
}

/**
 * Phone 产品规范
 *
 * Interface Phone
 */
interface Phone
{
    public function work();
    public function sms();
}

/**
 * AbstractFactory 抽象工厂类
 *
 * Class AbstractFactory
 */
abstract class AbstractFactory
{
    abstract public static function createTV(): TV;
    abstract public static function createPC(): PC;
    abstract public static function createPhone(): Phone;
}

/**
 * ProductFactory 产品工厂
 *
 * Class ProductFactory
 */
class ProductFactory extends AbstractFactory
{
    public static function createTV(): TV
    {
        // ...
    }

    public static function createPC(): PC
    {
        // ...
    }

    public static function createPhone(): Phone
    {
        // ...
    }
}

// 使用
ProductFactory::createPC()->play();
