<template>
    <div>
        <button @click="incrementCount">Increment count {{count}}</button>
        
    </div>
</template>
<script>
import Mixincounter from '@/mixin/counter';

export default {
    name:"ClickCounter",
    mixins:[Mixincounter]
    
}
</script>
<style lang="">
    
</style>