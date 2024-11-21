<template>
    <div class="dark-mode-container">
      <q-toggle 
        v-model="$q.dark.isActive" 
        @update:model="onToggle" 
        color="primary"
        switch
      />


      asfdasdfdsf
    </div>
  </template>
  
  <script setup>
  import { useQuasar } from "quasar";
  
  const $q = useQuasar();
  
  // Check and apply dark mode preference on mount
  if (localStorage.getItem('darkMode') === 'true') {
    $q.dark.set(true);
  }
  
  // Function to handle toggle state
  function onToggle() {
    localStorage.setItem('darkMode', $q.dark.isActive);
  }
  </script>
  
  <style scoped>
  .dark-mode-container {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px;
  }
  </style>