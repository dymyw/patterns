package Singleton

// GetInstance1 获取单例
func GetInstance1() *singleton {
	if instance == nil {
		instance = &singleton{} // NOT THREAD SAFE
		// 懒汉模式，致命的是在多线程不能正常工作
	}

	return instance
}
