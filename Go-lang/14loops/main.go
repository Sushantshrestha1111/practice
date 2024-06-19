package main

import "fmt"

func main() {

	fmt.Println("Go lang loops")

	//creating a slice
	days := []string{
		"sunday",
		"monday",
		"Tuesday",
		"Wednesday",
		"Thursday",
	}

	// for d := 0; d < len(days); d++ {
	// 	fmt.Println(days[d])
	// }

	//in the loop below the i is not a value it is an index

	// for i := range days {
	// 	fmt.Println(days[i])
	// }

	//for each loop in go lang
	//using coma ok  to ignore idex and only caring about day
	//if index is needed it can be for index,days:=range days
	for _, days := range days {
		fmt.Println("index is and day is  :\n", days)
	}

	//continue and break in loop

	rougValue := 1

	for rougValue < 10 {

		//for continue it should be
		// if rougValue == 5 {
		// 	rougValue++
		// 	continue

		// }

		//go to in loop
		if rougValue == 2 {
			goto loco
		}

		// if rougValue == 5 {
		// 	break
		// }
		fmt.Println(rougValue)
		rougValue++
	}

	//go to in loop
loco:
	fmt.Println("the value is 2")

}
