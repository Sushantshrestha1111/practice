<template>
    <div>
        <h1 class="text-3xl font-bold text-center text-blue-600 mb-6">To-Do</h1>
    </div>
    <AddToDoList/>
    <ToDoList :todolist="todolist"/>
    
</template>
<script setup>

import AddToDoList from '@/components/AddToDoList.vue';

import ToDoList from '@/components/ToDoList.vue';
import {ref} from 'vue'

const todolist =ref([
    {id:1,title:'task1',description:'des of task 1',priority:2},
    {id:2,title:'task2',description:'des of task 1',priority:3},
    {id:3,title:'task3',description:'des of task 1',priority:1},
    {id:4,title:'task4',description:'des of task 1',priority:2},
])


</script>
