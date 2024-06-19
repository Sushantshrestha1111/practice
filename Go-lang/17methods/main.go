package main

import "fmt"

func main() {
	sush := User{"sush", "email", 9, true}
	fmt.Println(sush)
	fmt.Printf("value are %v\n", sush)
	sush.newEmail()

	sush.GetStatus()
	fmt.Printf("value are %v\n", sush)

}

type User struct {
	Name   string
	email  string
	age    int
	status bool
}

func (u User) GetStatus() {

	fmt.Println("the status of user is:", u.status)

}

//we should use pointer for actuallu changing the email

func (u *User) newEmail() { // pointer receiver to modify the struct
	u.email = "example@gmail.com" // use lowercase for struct field
	fmt.Println("the new email is:", u.email)
}
