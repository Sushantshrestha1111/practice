<template>
    <div>{{ use }}</div>
    <div v-html="surname"></div>
    <div v-bind:id="headingid">heaading</div>
    <button v-bind:disabled="isDisabled">button</button>
    <button v-bind="activeButton">active button</button>
    <h2 class="underline">text</h2>//static class example
    <h2 v-bind:class="status"> Sctatus</h2>
    <h2 v-bind:class="isPromoted && 'promoted'">prmoted</h2>
    <h2 v-bind:class="isSold ?  'sold-out':'new'">movie</h2>
    <h2 v-bind:class="['new','promoted']"> newly promotedmovie</h2>
    <h2 v-bind:class="[ispromoted && 'promoted',isSold ? 'sold-out':'new']"> Array conditional movie</h2>
   <h2 v-bind:class="{
    promoted:isPromoted,
    new:isSold,
    'sold-out':sold
   }">object conditional movie</h2>
  
  <!-- //instead of v-bind we can use : which is shortner of v - bind -->
  <h2 :style="{
    color:highlight,
    'font-size':headerSize +'px',
    padding:'20px'
  }"> Inline style</h2>
  
  <h2 :style="headerStyleObject">style object</h2>
  
  <h2 :style="[baseStyleObject,sucessStyle]">array style binding</h2>
   
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
        use: 'Sushant',
        surname: '<b>Shrestha</b>',
        headingid:'heading',
        isDisabled:true,
        activeButton:false,
        status:'danger',
        isPromoted:true,
        isSold:true,
        highlight:'orange',
        headerSize:50,
        headerStyleObject:{
          color:'blue',
          fontSize:'50px',
          padding:'15px'
        },
        baseStyleObject:{
          fontSize:'50px',
          padding:'10px'
        },
        sucessStyle:{
          color:'green',
          backgroundColor:"lightgreen",
          border:'1px solid green',
        }
       
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
  