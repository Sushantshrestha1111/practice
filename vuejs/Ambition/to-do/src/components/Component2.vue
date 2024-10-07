<template >
    <div>
        <h1>this is the second component</h1>
        <Component3Vue/>
       
    </div>
</template>
<script>

import Component3Vue from './Component3.vue'

export default {
    name:"component2Vue",
    components:{
        Component3Vue
    }
   
}
</script>
<style lang="">
    
</style>