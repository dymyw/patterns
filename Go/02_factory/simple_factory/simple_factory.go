package simple_factory

// IRuleConfigParser 配置解析规则接口
type IRuleConfigParser interface {
	Parse(data []byte)
}

// jsonRuleConfigParser json 配置解析
type jsonRuleConfigParser struct {}
// Parse 实现 IRuleConfigParser 接口
func (J jsonRuleConfigParser) Parse(data []byte) {
	panic("implement me")
}

// yamlRuleConfigParser yaml 配置解析
type yamlRuleConfigParser struct {}
// Parse 实现 IRuleConfigParser 接口
func (J yamlRuleConfigParser) Parse(data []byte) {
	panic("implement me")
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
