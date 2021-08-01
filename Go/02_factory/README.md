## 工厂模式

### 简单工厂模式

NewXxx 函数返回接口时就是简单工厂模式，规范了产品

```go
// IRuleConfigParser 配置解析规则接口
type IRuleConfigParser interface {
    Parse(data []byte)
}

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
// IRuleConfigParserFactory 配置解析规则工厂接口
type IRuleConfigParserFactory interface {
    CreateParser() IRuleConfigParser
}

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

### 抽象工厂模式

组合思想，增加固定类型产品的不同具体工厂

```go
// ISystemConfigParser ISystemConfigParser
type ISystemConfigParser interface {
    ParseSystem(data []byte)
}

// IConfigParserFactory 工厂方法接口
type IConfigParserFactory interface {
    CreateRuleParser() IRuleConfigParser
    CreateSystemParser() ISystemConfigParser
}
```
