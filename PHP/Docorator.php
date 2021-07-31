<?php
/**
 * 装饰器模式(Decorator)
 *  定义了一系列的装饰流程，每个装饰流程过后，都还可以被其它流程再装饰
 *  就像一个管道一样，有时候也叫管道模式
 *
 * 应用场景
 *  过滤器
 *  中间件
 */

/**
 * 元件接口
 *
 * Interface Component
 */
interface Component
{
    public function display();
}

/**
 * 最初的元件
 *
 * Class Person
 */
class Person implements Component
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function display(): string
    {
        return '待装饰的对象：' . $this->name;
    }
}

/**
 * 装饰元件的抽象类
 *
 * Class Clothes
 */
abstract class Clothes implements Component
{
    protected $component;

    public function decorator($component)
    {
        $this->component = $component;

        return $this;
    }

    public function display()
    {
        // 跳到上一次
        if ($this->component) {
            // 返回装饰前的状态
            return $this->component->display();
        }
    }
}

/**
 * 帽子装饰物
 *
 * Class Hat
 */
class Hat extends Clothes
{
    public function display()
    {
        return parent::display() . '戴上帽子';
    }
}

/**
 * 鞋子装饰物
 *
 * Class Shoes
 */
class Shoes extends Clothes
{
    public function display()
    {
        return parent::display() . '穿上鞋子';
    }
}

// 使用
$person = new Person('老王');
$hat    = new Hat();
$shoes  = new Shoes();
echo $shoes->decorator($hat->decorator($person))->display();

