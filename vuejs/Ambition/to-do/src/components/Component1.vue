<template lang="">
    <div>
        <h1>
            This is the component one 
        </h1>
        <Component2/>
    </div>
</template>
<script>
import Component2 from "./Component2.vue"
export default {
    name:"Component1Vue",
    components:{
        Component2
    }
}
</script>
<style lang="">
    
</style>