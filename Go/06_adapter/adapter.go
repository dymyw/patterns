package adapter

// Charger 充电器接口
type Charger interface {
	charge() string
}

// Adaptee 被适配的目标接口
type Adaptee interface {
	exec() string
}
func NewAdaptee() Adaptee {
	return &adapteeImpl{}
}
// adapteeImpl 被适配的目标类（安卓充电器）
type adapteeImpl struct{}
// exec 实现 Adaptee 接口
func (*adapteeImpl) exec() string {
	return "执行充电操作"
}

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
