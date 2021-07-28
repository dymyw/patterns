package Singleton

import "sync"

// singleton 实例
type singleton struct {
}

// 指向实例的指针
var instance *singleton

var once sync.Once

// GetInstance 获取单例
func GetInstance() *singleton {
	// 通过使用 sync.Once 包可以实现线程安全的单例模式
	once.Do(func() {
		// 实现原理：空指针，只赋值一次实例（实例只创建一次）
		instance = &singleton{}
	})

	return instance
}
