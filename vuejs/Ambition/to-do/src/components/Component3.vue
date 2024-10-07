<template >
    <div>
        <h1>This is the component Three</h1>
    <h1>this is the passed props in component3 {{ username }}</h1>
        
    </div>
</template>
<script>
export default {
name:"component3Vue",
inject :['username']
}
</script>
<style lang="">
    
</style>