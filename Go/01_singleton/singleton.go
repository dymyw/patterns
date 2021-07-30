package singleton

import "sync"

// singleton 单例结构体
type singleton struct {}

var (
	instance *singleton // 指向单例的指针
	once sync.Once
)

// GetInstance 获取单例
func GetInstance() *singleton {
	// 通过使用 sync.Once 包可以实现线程安全的单例模式
	once.Do(func() {
		// 实现原理：空指针，只赋值一次实例（实例只创建一次）
		instance = &singleton{}
	})

	return instance
}
