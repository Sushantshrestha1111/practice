package main

//IN Go lang array are not used a lot instead of this data stracture slices are used
import "fmt"

func main() {

	var fruits [4]string
	fruits[0] = "apple"
	fruits[1] = "banana"
	fruits[2] = "orange"
	fruits[3] = "mango"

	fmt.Println(fruits)
	fmt.Println("there are :", len(fruits))
	//thing to note ever if there are 3 fruits in the list it will show 4 because we have declared the array size of 4 kinda strange but it is what it is

	var veglist = [4]string{"potato", "beans", "mushroom", "tomato"}

	fmt.Println("The list of vegitables are:", veglist)

}
