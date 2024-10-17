<template>
    <div>
        <h1>this is to do list</h1>
        
    </div>

    <div>
        <div
        v-for="todo in todolist"
        :key="todo.id">
            <div class="Container">
                <div class="labelTab"></div>
                <div class="datatab">
                    <span>{{ todo.title }}</span>
                    <span>{{ todo.description }}</span>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
import {defineProps} from 'vue'


defineProps({
    todolist:{
        type:Array,
        required:true
    }
})

</script>
