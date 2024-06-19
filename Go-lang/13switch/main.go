package main

import (
	"fmt"
	"math/rand"
	"time"
)

func main() {

	fmt.Println("switch in go lang")

	rand.Seed(time.Now().UnixNano())
	diceNumber := rand.Intn(6) + 1
	fmt.Println("the number after dice roll is: ", diceNumber)

	switch diceNumber {
	case 1:
		fmt.Println("the number after dice roll is 1")
	case 2:
		fmt.Println("the number after dice roll is 2")
	case 3:
		fmt.Println("the number after dice roll is 3")
		fallthrough
		// fallthrough will move to next case if the number is 3  it will also print case 4
	case 4:
		fmt.Println("the number after dice roll is 4")

	default:
		fmt.Println("the number after dice roll is greater than 4")

	}

}
