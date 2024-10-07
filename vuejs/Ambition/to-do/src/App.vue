<template>
  <div>
    <!-- <ArticleComponent title="First Article" :likes="50"></ArticleComponent> -->
    <h1>name: {{username}}</h1>
    <Component1Vue/>
  </div>

  
  
  <button @click="showPopup=true">show popup</button>
  
  <Popup v-if="showPopup" @close="showPopup=false"/>
  

</template>



<script>
// import ArticleComponent from "./components/Article.vue";
import Component1Vue from './components/Component1.vue';
import Popup from './components/Popup.vue';

export default {
  name: "App",
  components: {
    // ArticleComponent,
    Component1Vue,
    Popup
  },
  data() {
    return {
      username: 'Sushant Shrestha',
      showPopup:false,
    };
  },
  provide() {
    return {
      username: this.username,
    };
  },

  methods:{
    togglePopup(){
      this.showPopup = !this.showPopup;
    }
  }
};
</script>
