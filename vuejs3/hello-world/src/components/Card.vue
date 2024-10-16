<template>
    <div class="min-w-md ml-5  w-full  overflow-hidden mt-5 rounded-md shadow-lg bg-white p-6 relative">
       
      <div class="absolute left-0 top-0 h-full w-11 bg-green-400 rounded-l-xl flex items-center justify-center">
      </div>
      <div class="flex items-center ml-12 h-full"> 
        
        <input type="checkbox" class="mr-2" />
        <div class="flex flex-col ml-5 items-start">
            <h1 class="text-xl font-bold text-gray-800"><slot name="Title">Task 1</slot></h1>
            <p><slot name="Description">Default</slot></p>
        

        </div>
        
        
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: "CardOne",
  };
  </script>
  
  <style>

  </style>
  