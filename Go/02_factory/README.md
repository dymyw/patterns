## 工厂模式

### 简单工厂模式

NewXxx 函数返回接口时就是简单工厂模式
```go
// NewIRuleConfigParser 简单工厂
func NewIRuleConfigParser(t string) IRuleConfigParser {
    switch t {
    case "json":
        return jsonRuleConfigParser{}
    case "yaml":
        return yamlRuleConfigParser{}
    }

    return nil
}
```
