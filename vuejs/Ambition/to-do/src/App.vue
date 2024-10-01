<template>
  <h2 v-for="(name,index) in names" :key="name">{{index}}{{ name }}</h2>
  <h2 v-for="fullname in fullnames" :key="fullname">{{ fullname.first }} {{ fullname.lastname }}</h2>

  <div v-for="actor in actors" :key="actor.name">
    <h2>{{ actor.name }}</h2>
    <h2 v-for="movie in actor.movie" :key="movie">{{ movie }}</h2>
  </div>
  
 
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
      names:['Sushant','Prashant','pragif'],
      fullnames:[
        {first:'Sushant',lastname:'Shrestha'},
        {first:'Prashant',lastname:'Shrestha'},
        {first:'Pragif',lastname:'Shrestha'}
      ],
      actors:[
        {
          name:'actor1',
          movie:['movie1','movie 2']
        },
        {
          name:'actor2',
          movie:['movie 3', 'movie 4']
        },
      ]
    
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
