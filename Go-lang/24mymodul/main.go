package main

import (
	"fmt"
	"log"
	"net/http"

	"github.com/gorilla/mux"
)

func main() {
	fmt.Println("hello this is go lang")
	greter()
	r := mux.NewRouter()
	r.HandleFunc("/", serverHome).Methods("GET")

	log.Fatal(http.ListenAndServe("4000", r))

}

func greter() {

	fmt.Println("hey")

}

func serverHome(w http.ResponseWriter, r *http.Request) {

	w.Write([]byte("<h1>Welcome to go lang</h1>"))

}
