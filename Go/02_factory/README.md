## 工厂模式

### 简单工厂模式

NewXxx 函数返回接口时就是简单工厂模式，规范了产品

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

### 工厂方法模式

规范了工厂

```go
// NewIRuleConfigParserFactory 用一个简单工厂封装工厂方法
func NewIRuleConfigParserFactory(t string) IRuleConfigParserFactory {
    switch t {
    case "json":
        return jsonRuleConfigParserFactory{}
    case "yaml":
        return yamlRuleConfigParserFactory{}
    }

    return nil
}
```
