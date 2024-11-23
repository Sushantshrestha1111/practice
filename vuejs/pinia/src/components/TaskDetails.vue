<template>
    <div class="task">
        <h3>{{ task.title }}</h3>
        <div class="icons">
            <i class="material-icons"
               @click="taskStore.delTask(task.id)">delete</i>
            <i class="material-icons"
               @click="taskStore.toggleTask(task.id)">favorite</i>
        </div>
    </div>
</template>

<script>
import { useTaskStore } from '../store/TaskStore';

export default {
    props: ['task'],
    setup() {
        const taskStore = useTaskStore();
        return { taskStore }; // Explicitly return taskStore as an object
    },
};
</script>
