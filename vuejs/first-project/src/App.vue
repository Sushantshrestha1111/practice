<template>
  <div><div>{{greet}} {{name}}</div>
<div v-html="htmll"></div>
<h2 v-bind:id="headingid">Heading</h2>
<button v-bind:disabled="isDisabled">Button</button>
  </div>
</template>

<script>
export default{
  name:"App",
  data(){
    return{
      name:"Sushant Shrestha",
      greet:"hello",
      htmll:"<b>Greattings to all</b>",
      headingid:"he",
      isDisabled:true
    };
  },
};

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
</style>
