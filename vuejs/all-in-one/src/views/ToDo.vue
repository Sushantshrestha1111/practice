<template>
    <div class="w-full">
      <AddToDoList @todosubmit="handleToDoSubmit" />
      <ToDoList :todolist="todolist" @todoDelete="handleToDoDelete"/>
    </div>
  </template>
  
  <script setup>
  import { ref, onMounted } from 'vue';
  import AddToDoList from '@/components/AddToDoList.vue';
  import ToDoList from '@/components/ToDoList.vue';
  import { useToast } from 'vue-toastification';
  
  
  const toast = useToast();
  
  // Reactive to-do list
  const todolist = ref([
    
  ]);
  
  // Load from localStorage when component mounts
  onMounted(() => {
    const savedTodos = JSON.parse(localStorage.getItem('todolist'));
    if (savedTodos) {
      todolist.value = savedTodos;
    }
  });
  
  // Handle submission of new to-do item
  const handleToDoSubmit = (todoitem) => {
    todolist.value.push({
      id: generateId(),
      title: todoitem.title,
      description: todoitem.description,
      priority: todoitem.priority,
    });
    saveToLocalStorage();
  
    // Corrected toast success message
    toast.success('Added to local storage');
  };

  const handleToDoDelete=(id)=>{
    todolist.value = todolist.value.filter(todo => todo.id !== id);
  saveToLocalStorage(); // Update localStorage
  toast.success('Task removed successfully');
  }
  
  // Save the to-do list to localStorage
  const saveToLocalStorage = () => {
    localStorage.setItem('todolist', JSON.stringify(todolist.value));
  };
  
  // Generate a unique ID for each task
  const generateId = () => Math.floor(Math.random() * 10000);
  </script>
  