<template>
  
    <h1>{{ name }}</h1>
    <button v-on:click="name='Samazvasnet'">Change name</button>
    <button @click="changename($event),increment(1)">sas</button>
    <h1>{{ number }}</h1>
    <button v-on:click="increment(1)">Increment</button>
    <button v-on:click="increment(5)">increment by 5</button>
    <button @click="decrement(1)">Decrement</button>
    <!-- @ is the shortner for  v-on: -->
    
    </template>
     
    <script>
    
    
    // "import BackgroundCardVue from "./components/Background-card.vue";"
    
    // asdfasdf
    export default {
      name: 'App',
     
      data() {
        return{
          name:"sushant",
          number:0,
        }
      },
      methods:{
          increment(num){
            return this.number += num
          },
          decrement(num){
            return this.number-=num
          },
          changename(event){
            this.name='samazvasnet'
            console.log('Event',event)
          }
        }
      
    }
    </script>
    
    <style>
    #app {
      font-family: Avenir, Helvetica, Arial, sans-serif;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      text-align: center;
      color: #2c3e50;
      margin-top: 60px;
    }
    
    .underline{
      text-decoration: underline;
    
    }
    .promoted{
      font-style: italic; 
    }
    .sold-out{
      color: red;
    
    }
    
    .new{
      color: green;
    
    }
    </style>
    