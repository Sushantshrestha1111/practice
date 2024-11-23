<template>
    <div class="flex flex-col items-center  cursor-pointer">
    
      <div class="p-1 bg-green-500 rounded-full">
        
        <div class="p-1 bg-white rounded-full">
         
          <img
            class="w-16 h-16 rounded-full border-2 border-gray-300"
            :src="avatar"
            alt="Profile"
          />
        </div>
      </div>
      <!-- Text Label -->
      <span class="text-sm text-gray-600 font-medium truncate">
        {{ firstName }} {{ lastName }}
      </span>
    </div>
  </template>
  
  <script setup>
  defineProps({
    firstName: {
      type: String,
      required: true,
    },
    lastName: {
      type: String,
      required: true,
    },
    avatar: {
      type: String,
      required: true,
    },
  });
  </script>
  
  <style>
  /* Optional: Add hover effect */
  .cursor-pointer:hover img {
    transform: scale(1.05);
    transition: transform 0.2s ease-in-out;
  }
  </style>
  