<template>
  <h1>Enter the New Task Here</h1>
  <form id="form" @submit.prevent="onSubmit">
    <div class="form-control">
      <div class="flex flex-col">
        <input 
          type="text" 
          placeholder="Add task" 
          v-model="task" 
        />
        <input 
          type="text" 
          v-model="description" 
          placeholder="Enter the description" 
        />
        <input 
          type="number" 
          v-model="priority" 
          placeholder="Enter priority (e.g., 1)" 
        />
      </div>
      <button class="btn" type="submit">ADD</button>
    </div>
  </form>
</template>

<script setup>
import { ref } from 'vue';
import { useToast } from 'vue-toastification';
const emit = defineEmits(['todosubmit']);

const task = ref('');
const description = ref('');
const priority = ref('');

const toast = useToast();

const onSubmit = () => {
  if (!task.value) {
    toast.error('Enter the Task'); // Show error if input is empty
    return;
  }
  

  const todoitem = {
    title: task.value, 
    description: description.value,
    priority: parseFloat(priority.value) || 1, // Default priority if not provided
  };

  emit('todosubmit', todoitem); // Emit the object

  toast.success('Added Sucessfully')
  // Clear the input fields after submission
  task.value = '';
  description.value = '';
  priority.value = '';
};
</script>
