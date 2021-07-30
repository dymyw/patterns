package singleton

// 饿汉模式
// 一上来就实例化，当程序中用不到该对象时，浪费了一部分空间
// 和懒汉模式相比，更安全，但是会减慢程序启动速度

func init() {
	instance = &singleton{}
}

// GetInstance2 获取单例
func GetInstance2() *singleton {
	return instance
}
