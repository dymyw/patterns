## 设计模式

软件开发中，人们为了开发可扩展的代码，总结出来的套路

`典型场景的典型解决方案`

### 设计模式有哪些原则

`六大原则（Solid 固体的、稳定的）`

1. 单一原则（封装）S
    - 一个类只负责一项职责
2. 里氏替换原则（继承）L
    - 子类可以扩展父类的功能，但不能改变父类原有的功能
3. 开闭原则（多态）O
    - 用扩展实体的方式来实现功能的变化
4. 迪米特原则 L
    - 一个对象应尽可能少的了解其它对象
5. 依赖倒置原则 D
    - 面向接口编程
6. 接口隔离原则 I
    - 设计合理的接口粒度

### 有哪些设计模式

23 种设计模式，按功能划分

- 创建型模式 Create（5 种）
    - [x] 单例模式
    - [x] 工厂方法模式
        - 实体类应用：消息、邮件、资源等
    - [ ] 抽象工厂模式
    - [ ] 建造者模式
    - [ ] 原型模式
- 结构型模式 Struct（7 种）
    - [x] 适配器模式
    - [x] 桥接模式
    - [x] 装饰器模式
    - [ ] 代理模式
    - [ ] 组合模式
    - [ ] 门面模式
    - [ ] 享元模式
- 行为型模式 Active（11 种）
    - [x] 策略模式
    - [x] 观察者模式
    - [x] 责任链模式
    - [ ] 模板方法模式
    - [ ] 迭代器模式
    - [ ] 状态模式
    - [ ] 解释器模式
    - [ ] 备忘录模式
    - [ ] 命令模式
    - [ ] 中介者模式
    - [ ] 访问者模式
