package main

import (
	"database/sql"
	"fmt"
	"log"

	_ "github.com/lib/pq"
)

const (
	host     = "localhost"
	port     = 5432
	user     = "postgres"
	password = "AtulitDhula1$"
	dbname   = "lawyer"
)

type Client struct {
	ID              int
	FirstName       string
	MiddleName      sql.NullString
	LastName        string
	ProfileImageURL string
	Email           string
	ContactNo       string
}

func main() {
	psqlInfo := fmt.Sprintf("host=%s port=%d user=%s password=%s dbname=%s sslmode=disable",
		host, port, user, password, dbname)

	db, err := sql.Open("postgres", psqlInfo)
	if err != nil {
		log.Fatal(err)
	}
	defer db.Close()

	rows, err := db.Query("SELECT id, first_name, middle_name, last_name, profile_image_url, email, contact_no FROM client")
	if err != nil {
		log.Fatal(err)
	}
	defer rows.Close()

	var clients []Client

	for rows.Next() {
		var c Client
		err := rows.Scan(&c.ID, &c.FirstName, &c.MiddleName, &c.LastName, &c.ProfileImageURL, &c.Email, &c.ContactNo)
		if err != nil {
			log.Fatal(err)
		}
		clients = append(clients, c)
	}

	if err := rows.Err(); err != nil {
		log.Fatal(err)
	}

	fmt.Println("Clients:")
	for _, client := range clients {
		fmt.Printf("ID: %d, Name: %s %s %s, Email: %s, Contact No: %s\n", client.ID, client.FirstName, client.MiddleName.String, client.LastName, client.Email, client.ContactNo)
	}
}
