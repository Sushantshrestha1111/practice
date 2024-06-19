package main

import "fmt"

func main() {

	value := 23
	var ptr = &value

	fmt.Println(ptr)  //this is the location of the pointer
	fmt.Println(*ptr) //this is the actual value of the pointer

	*ptr = *ptr + 2

	fmt.Println("the value after addition is :", *ptr)

}
