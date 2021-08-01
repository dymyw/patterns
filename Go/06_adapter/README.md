## 适配器模式

用于转换一种接口适配另一种接口

```go
// 通过内嵌方式，实现了类型组合，非侵入式
type adapter struct {
    Adaptee
}
// charge 实现了 Charger 接口
func (a *adapter) charge() string {
    // adapter 以来 Adaptee 实现了 Charger
    return a.exec()
}

// NewAdapter 创建一个适配器
func NewAdapter(adaptee Adaptee) Charger {
    return &adapter{
        adaptee,
    }
}
```
