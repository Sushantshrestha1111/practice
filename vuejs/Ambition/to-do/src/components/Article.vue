<template>
  <div>
    <h1>this is the first artical component</h1>
    <h1>{{title}}</h1>
    <h1>{{likes}}</h1>
  </div>
</template>

<script>
export default {
    name:"ArticalComponent",
    props:{
        title:String,
        likes:Number
    }

}
</script>

<style>

</style>