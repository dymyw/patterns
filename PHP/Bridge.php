<?php
/**
 * 桥接模式(Bridge Pattern)
 *      将抽象部分与它的实现部分分离，使它们都可以独立地变化
 *
 * 桥接模式是比多继承方案更好的解决方法
 * 桥接模式提高了系统的可扩充性，在两个变化维度中任意扩展一个维度，都不需要修改原有系统
 *
 * @example 通过 APP（Channel）给小明发提醒消息（Message）：支付完成
 * 应用场景
 *  不同的渠道发不同级别的消息
 */

/**
 * 渠道接口
 *
 * Interface Channel
 */
interface Channel
{
    public function send($to, $content);
}

/**
 * App 渠道
 *
 * Class App
 */
class App implements Channel
{
    public function send($to, $content)
    {
        return '通过 App 给' . $to . '发' . $content;
    }
}

/**
 * 微信渠道
 *
 * Class Wechat
 */
class Wechat implements Channel
{
    public function send($to, $content)
    {
        return '通过微信给' . $to . '发' . $content;
    }
}

/**
 * 消息接口
 *
 * Interface Message
 */
interface Message
{
    public function setMessage($content);
}

/**
 * 桥接类
 *  两个维度各自实现
 *  通过设置资源，加工数据来实现融合
 *
 * Class AbstractMessage
 */
abstract class AbstractMessage implements Message
{
    /**
     * @var Channel
     */
    protected $channel;

    public function setChannel(Channel $channel)
    {
        $this->channel = $channel;

        return $this;
    }

    abstract public function setMessage($content);

    public function send($to, $content)
    {
        return $this->channel->send($to, $this->setMessage($content));
    }
}

/**
 * 系统消息
 *
 * Class System
 */
class System extends AbstractMessage
{
    public function setMessage($content)
    {
        return '系统消息：' . $content;
    }
}

/**
 * 通知消息
 *
 * Class Notice
 */
class Notice extends AbstractMessage
{
    public function setMessage($content)
    {
        return '通知消息：' . $content;
    }
}

// 使用
$channel = new App();
$message = new Notice();
echo $message
        ->setChannel($channel)
        ->send('小明', '支付成功');
