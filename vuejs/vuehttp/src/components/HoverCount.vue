<template >
    <div>
        <h2 @mouseover="incrementCount">hovered{{ count }}</h2>
    </div>
</template>
<script>
import counter from '@/mixin/counter';

 
export default {
    name:"HoverMixin",
    mixins:[counter],
    
}
</script>
<style lang="">
    
</style>