<template>
    <form @submit.prevent="handleSubmit">
        <input
        type="text"
        placeholder="I have to do"
        v-model="newTask" />
        <button>Add</button>
    </form>
</template>

<script setup>
import { ref } from 'vue';
import { useTaskStore } from '../store/TaskStore'; // Uncomment and use taskStore

const newTask = ref('');
const taskStore = useTaskStore(); // Define taskStore

const handleSubmit = () => {
    console.log('hello');
    if (newTask.value.length > 0) {
        taskStore.addTask({
            title: newTask.value,
            isFav: false,
            id: Math.floor(Math.random() * 10000)
        });

        // Reset the input field
        newTask.value = ''; // Use newTask.value to reset
    }
};
</script>
