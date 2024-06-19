package main

import (
	"fmt"
	"time"
)

func main() {
	presentTime := time.Now()
	fmt.Println(presentTime)
	//usingg of Format package for formating the date in the format the format should be same time and day should bealways Monday
	fmt.Println(presentTime.Format("01-02-2006 15:04:05 Monday"))
	//This is for the reverse time
	createdDate := time.Date(2024, time.March, 12, 23, 23, 0, 0, time.UTC)
	fmt.Println(createdDate)
	fmt.Println(createdDate.Format("01-02-2006 Monday"))
}
