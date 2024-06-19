package main

import (
	"bufio"
	"fmt"
	"os"
	"strconv"
	"strings"
)

func main() {

	fmt.Println("Please enter the rating between 0-5")

	reader := bufio.NewReader(os.Stdin)

	input, _ := reader.ReadString('\n')

	fmt.Println("The entered Rating is:", input)

	//for conversion
	//strconv.parseFlot is used for converting  which accepts 2 values one is value and another is type for conversion float64
	numRatting, err := strconv.ParseFloat(strings.TrimSpace(input), 64)
	//in this strings package is used  the Trumspace of pck strings is used to trim the /n which is comming with the ratting

	if err != nil {
		fmt.Println(err)
	} else {
		fmt.Println("The rating after adding 1 is :", numRatting+1)
	}

}
