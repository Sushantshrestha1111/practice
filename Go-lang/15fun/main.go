package main

import "fmt"

func main() {

	fmt.Print("This is the function in go lang \n")
	addes := add(5, 6)

	fmt.Println(addes)

	pro := proadd(10, 20, 30, 40)

	fmt.Println("\n", pro)

	multiple, msg := multi(10, 20, 30)
	fmt.Println(multiple)
	fmt.Println(msg)

}

// at last you can should the type of data for eg int string

func add(valone int, valtwo int) int {
	return valone + valtwo

}

//suppose you wnat multiple value in a function
//you can also pass multiple type of values
func proadd(values ...int) int {
	total := 0
	for _, value := range values { // Use '_' to ignore the index
		total += value
	}
	return total
}

func multi(vales ...int) (int, string) {

	multotal := 0

	for _, vales := range vales {
		multotal += vales
	}
	return multotal, "hello this is text"

}
