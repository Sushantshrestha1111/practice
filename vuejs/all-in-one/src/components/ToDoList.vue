<template>
    <div>
        <h1 class="text-green-400">Complete the given task</h1>
        
      <div
        v-for="todo in todolist"
        :key="todo.id"
        :class="['rounded-lg shadow-lg w-full mb-4 p-4 relative flex',
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
            <button 
               class="rounded-full bg-slate-500 w-11" 
               @click="deleteTodo(todo.id)"> del
              </button>
          </div>

      
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
  import { defineProps } from 'vue';

  const emit=defineEmits(['todoDelete'])
  
  defineProps({
    todolist: {
      type: Array,
      required: true,
    },
  });

  const deleteTodo=(id)=>{
    emit('todoDelete',id)
  }
  
  // Function to get priority class based on priority level
  const getPriorityClass = (priority) => {
    switch (priority) {
      case 1:
        return "bg-blue-200";
      case 2:
        return "bg-red-200";
      case 3:
        return "bg-yellow-200";
        case 4:
          return "bg-green-200"
      default:
        return "bg-blue-200"; 
    }

  };
  const getPriorityClassBg = (priority)=>{
        switch (priority){
            case 1:
                return "bg-grey-100";
                case 2:
                    return "bg-red-50";
                    case 3:
                        return "bg-yellow-50";
                        case 4:
                          return "bg-green50"
                        default:
                            return "bg-grey-50";
        }
    };
  </script>
  