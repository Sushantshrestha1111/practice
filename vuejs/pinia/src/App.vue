<template>
  <main>
    <header>
      <img src="./assets/pinia-logo.svg" alt="pinia.logo" />
      <h1>Pinia Task</h1>
    </header>
    <AddTask/>
   
    <div>
        <button @click="filter='all'">Show All</button>
        <button @click="filter='fav'">Show fav</button>
      </div>
    <div class="task-list" v-if="filter==='all'">
      <span>you have {{ taskStore.totalCount }}task to do</span>
      <div v-for="task in taskStore.tasks" :key="task.id">
        <TaskDetails :task="task"/>
      </div>
    </div>

    <div class="task-list" v-if="filter==='fav'">
      <span>you have{{ taskStore.favCount }} favourate task left</span>
    
      <div v-for="task in taskStore.fav" :key="task.id">
        <TaskDetails :task="task"/>
      </div>
    </div>
  </main>
</template>

<script setup>
import {ref} from 'vue'

import { useTaskStore } from './store/TaskStore';
import AddTask from './components/AddTask.vue'
import TaskDetails from './components/TaskDetails.vue'
const taskStore = useTaskStore(); // No need for return
const filter =ref('all')
</script>
