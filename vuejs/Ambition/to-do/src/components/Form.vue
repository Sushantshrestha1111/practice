<template>
  <form>
<div>
  <pre>
    {{ JSON.stringify(formValues,null,2) }}
  </pre>
</div>
    <div>
      <label for="name">Name</label>
      <input type="text" id="name" v-model="formValues.name">
    </div>

    <div>
      <label for="Profilesummary">profile summery</label>
      <input id="profile" v-model="formValues.profileSummary"/>
    </div>

    <div>
      <label for="country">country</label>
      <select id="country" v-model="formValues.country">
        <option value="">Select a Country</option>
        <option value="nepal">nepal</option>
        <option value="India">India</option>
        <option value="China">China</option>
      </select>
    </div>
<div>
  <div>
      <label for="joblocation">job country</label>
      <select id="joblocation" multiple v-model="formValues.job_location">
        <option value="">Select a JOb location</option>
        <option value="nepal">nepal</option>
        <option value="India">India</option>
        <option value="China">China</option>
      </select>
    </div>

</div>
   
  </form>
  


</template>
 
<script>


// "import BackgroundCardVue from "./components/Background-card.vue";"

// asdfasdf
export default {
  name: 'App',
 
  data() {
    return{
      formValues:{
        name:'',
        profileSummary:'',
        country:'',
        job_location:[],
      }
     
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
