<template>
  <!-- <PostRequest/>
  <PostList/> -->
  <ClickCount/>
  <HoverCount/>
</template>

<script>
import ClickCount from './components/ClickCount.vue';
import HoverCount from './components/HoverCount.vue';
// import PostList from './components/PostList.vue';
// import PostRequest from './components/PostRequest.vue';


export default {
  name: 'App',
  components: {
    // PostList,
    // PostRequest,
    ClickCount,
    HoverCount
    
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
