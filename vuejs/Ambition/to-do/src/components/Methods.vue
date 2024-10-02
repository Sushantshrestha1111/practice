<template>
  
    <div>hello</div>
    <h2>{{ add(2,3,4) }}</h2>
    <h2>{{ multiplier(5) }}</h2>
    <h2>{{ multiplier(basevalue) }}</h2>
    
    
      
     
    </template>
     
    <script>
    // "import BackgroundCardVue from "./components/Background-card.vue";"
    
    // asdfasdf
    export default {
      name: 'App',
     
      data() {
        return{
          baseMultipilier:5,
          basevalue:2
        }
    
      },
      methods:{
        add(a,b,c){
          return a+b+c
        },
        multiplier(num){
         return num *this.baseMultipilier
          // baseMultiplier is a data property we acess it using this
          // if you need to use a data property as an argument we dont need this keyword
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
    