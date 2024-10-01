<template>
    <h1 v-if="number===5">number is {{ number }}</h1>
    <h1 v-else-if="number <0">The number is negetive</h1>
    <h1 v-else-if="number >0">The number is positive</h1>
    <h1 v-else>is not a number</h1>
    <template v-if="display">
      <h2>Sushatn</h2>
      <h2 v-html="nickname"></h2>
    </template>
    <h1 v-show="showElement">v- show element</h1>
   
  </template>
   
  <script>
  // "import BackgroundCardVue from "./components/Background-card.vue";"
  export default {
    name: 'App',
    // components: {
    //   BackgroundCardVue,
    // },
    data() {
      return {
        number:5,
        display:true,
        nickname:'<u>Ghost</u>',
        showElement:true,
        
      };
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
  