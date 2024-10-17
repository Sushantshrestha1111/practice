<template>
  <div class="fixed top-0 items-center  mb-10" >
    <nav>
     <router-link to="/expence">Expence Tracker</router-link> |
    <router-link to="/">To DO</router-link> 
   
  </nav>

  </div>
  
  <router-view/>
</template>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

nav {
  padding: 30px;
}

nav a {
  font-weight: bold;
  color: #2c3e50;
}

nav a.router-link-exact-active {
  color: #42b983;
}
</style>
