<template>
    <div class="flex flex-col items-center bg-gray-100 min-h-screen ">
      <h1 class="text-2xl font-bold mb-6">List of Tasks Pending</h1>
      <div class="w-full items-center"> 
        <div class="max-w-xl ">


            <card>
                <template v-slot:Title>
                    <span>New task</span>
                </template>
                <template v-slot:Description>
                    <span>New description</span>
                </template>
            </card>
            <card>
                <template v-slot:Title>
                    <span>Task 1</span>
                </template>
                <template v-slot:Description>
                    <span>New description</span>
                </template>
            </card>
            <card>
                <template v-slot:Title>
                    <span>Task</span>
                </template>
                <template v-slot:Description>
                    <span>New description</span>
                </template>
            </card>
        </div>
        
      </div>
    </div>
  </template>
  
  <script>
  import Card from './Card.vue';
  export default {
    name: "ContainerMain",
    components: {
      Card,
    },
  };
  </script>
  
  <style lang="">
  /* You can add component-specific styles here, if needed */
  </style>
  