<template >
    <h1>This is popup  component</h1>
    <input type="text" v-model="name">

    <button @click="$emit('close',name)">Close</button>
</template>
<script>
export default {
    name:'PopUp',
    emit:['close'],
    data(){
        return{
            name:'',
            contact:''
        }
    }
    
}
</script>
<style lang="">
    
</style>