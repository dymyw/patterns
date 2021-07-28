package Singleton

import "sync"

var once sync.Once

// GetInstance 获取单例
func GetInstance() *singleton {
	// 通过使用 sync.Once 包可以实现线程安全的单例模式
	once.Do(func() {
		instance = &singleton{}
	})

	return instance
}
