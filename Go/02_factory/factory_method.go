package factory

// IRuleConfigParserFactory 配置解析规则工厂接口
type IRuleConfigParserFactory interface {
	CreateParser() IRuleConfigParser
}

// jsonRuleConfigParserFactory json 配置解析
type jsonRuleConfigParserFactory struct {}
// CreateParser 实现 IRuleConfigParserFactory 接口
func (J jsonRuleConfigParserFactory) CreateParser() IRuleConfigParser {
	return jsonRuleConfigParser{}
}

// yamlRuleConfigParserFactory yaml 配置解析
type yamlRuleConfigParserFactory struct {}
// CreateParser 实现 IRuleConfigParserFactory 接口
func (y yamlRuleConfigParserFactory) CreateParser() IRuleConfigParser {
	return yamlRuleConfigParser{}
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
