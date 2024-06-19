package main

import (
	"fmt"
)

func main() {

	fmt.Println("defer in go lang")
	//when a function executes line by line soon as you put defer key word next line will execute atthe very last
	//it folows (LIFO)


	
	defer fmt.Println("world")
	fmt.Println("hello")
	myDefer()
}

func myDefer() {
	for i := 0; i < 5; i++ {
		defer fmt.Println(i)
	}

}
