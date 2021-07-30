## 单例模式

### 懒汉模式
```go
if instance == nil {
    instance = &singleton{}
}
```

### 饿汉模式
```go
func init() {
    instance = &singleton{}
}
```

### 双重检查机制

用 Sync.Mutex、原子性操作等，最终可以用 sync.Once 简化代码

```go
once.Do(func() {
    instance = &singleton{}
})
```
