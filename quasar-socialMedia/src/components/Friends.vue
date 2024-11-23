<template>
    <div class="flex flex-row mt-2">
      <img
        class="w-12 h-12 rounded-full"
        :src="avatar"
        alt="Profile"
      />
      
    </div>
  </template>
  
  <script setup>
  defineProps({
    firstName: String,
    lastName:String,
    avatar: String
  });
  </script>
  
  <style>
  
  </style>
  