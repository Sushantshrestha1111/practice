<template>
    <div>
        <h1 class="text-green-400">Complete the given task</h1>
        
      <div
        v-for="todo in todolist"
        :key="todo.id"
        :class="['rounded-lg shadow-lg mb-4 p-4 relative flex',
            getPriorityClassBg(todo.priority)
        ]"
      >
        <!-- Left Color Bar -->
        <div
          :class="[
            'absolute left-0 top-0 h-full w-11 rounded-l-xl',
            getPriorityClass(todo.priority)
          ]"
        ></div>
        
        <!-- Content Section -->
        <div class="flex items-center pl-12">
          <div class="flex flex-col items-start">
            <span class="text-xl font-semibold text-gray-800">{{ todo.title }}</span>
            <span class="text-gray-600">{{ todo.description }}</span>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
  import { defineProps } from 'vue';
  
  defineProps({
    todolist: {
      type: Array,
      required: true,
    },
  });
  
  // Function to get priority class based on priority level
  const getPriorityClass = (priority) => {
    switch (priority) {
      case 1:
        return "bg-red-400";
      case 2:
        return "bg-yellow-400";
      case 3:
        return "bg-green-400";
      default:
        return "bg-gray-200"; 
    }

  };
  const getPriorityClassBg = (priority)=>{
        switch (priority){
            case 1:
                return "bg-red-50";
                case 2:
                    return "bg-yellow-50";
                    case 3:
                        return "bg-green-50";
                        default:
                            return "bg-grey-50";
        }
    };
  </script>
  