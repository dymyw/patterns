package singleton

// 懒汉模式
// 非线程安全

// GetInstance1 获取单例
func GetInstance1() *singleton {
	// 存在线程安全问题，高并发时有可能创建多个对象
	if instance == nil {
		instance = &singleton{}
	}

	return instance
}
