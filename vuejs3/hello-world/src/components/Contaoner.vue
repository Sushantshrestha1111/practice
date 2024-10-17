<template>
    <div class="flex flex-col items-center bg-gray-100 min-h-screen ">
      <h1 class="text-2xl font-bold mb-6">List of Tasks Pending</h1>
      <div class="w-full items-center"> 
        <div class="max-w-xl ">


            <Card :task="{id: 1, title: 'Finish Project', description: 'Complete by EOD', priority: 1}" />
<Card :task="{id: 2, title: 'Exercise', description: '30 mins cardio', priority: 2}" />
<Card :task="{id: 3, title: 'Watch TV', description: 'Relax with a movie', priority: 3}" />

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
  