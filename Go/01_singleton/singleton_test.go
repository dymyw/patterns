package singleton

import "testing"

func TestGetInstance(t *testing.T) {
	instance1 := GetInstance()
	instance2 := GetInstance()
	if instance1 != instance2 {
		t.Fatal("instance is not equal")
	}
}

func BenchmarkGetInstance(b *testing.B) {
	// 并行
	b.RunParallel(func(pb *testing.PB) {
		for pb.Next() {
			if GetInstance() != GetInstance() {
				b.Errorf("test fail")
			}
		}
	})
}
