package main

import (
	"fmt"
	"io"
	"io/ioutil"
	"os"
)

func main() {

	fmt.Println("This is working with files")
	content := "This need to go in file"

	file, err := os.Create("file")

	if err != nil {
		panic(err)
	}

	length, err := io.WriteString(file, content)
	if err != nil {
		panic(err)

	}

	fmt.Println("length is:", length)
	defer file.Close()

}

func readfile(filename string) {
	databyte, err := ioutil.ReadFile(filename)
	if err != nil {
		panic(err)
	}

	fmt.Println("text data inside the file is \n", databyte)

}
