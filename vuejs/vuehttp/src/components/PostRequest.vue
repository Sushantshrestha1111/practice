<template>
    <div>
      <form @submit.prevent="createPost">
        <div>
          <label for="UserId">User ID</label>
          <input type="text" id="UserId" v-model="formData.userId" />
  
          <label for="title">Title</label>
          <input type="text" id="title" v-model="formData.title" />
  
          <label for="body">Body</label>
          <input type="text" id="body" v-model="formData.body" />
        </div>
        <button type="submit">Submit Post</button>
      </form>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    name: "PostRequest",
    data() {
      return {
        formData: {
          userId: "",
          title: "",
          body: ""
        }
      };
    },
    methods: {
      createPost() { // Fixed method name
        axios
          .post('https://jsonplaceholder.typicode.com/posts', this.formData)
          .then(response => {
            console.log(response);
          })
          .catch(error => {
            console.log(error);
          });
      }
    }
  };
  </script>
  
  <style>
  /* Add styles if needed */
  </style>
  