<template>
  <div>
    <h1>This is the new project
      <Background/>
      
    </h1>
  </div>
</template>

<script>
import Background from './components/Background.vue';


export default {
  name: 'App',
  components: {
    Background
   
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
</style>
