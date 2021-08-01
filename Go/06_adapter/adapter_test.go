package adapter

import "testing"

var expect = "执行充电操作"

func TestNewAdapter(t *testing.T) {
	adaptee := NewAdaptee()
	adapter := NewAdapter(adaptee)
	rst := adapter.charge()
	if rst != expect {
		t.Fatalf("expect: %s, actual: %s", expect, rst)
	}
}
