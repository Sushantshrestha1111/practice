<template>
  <div :class="[
  'min-w-md ml-5 w-full overflow-hidden mt-5 rounded-md shadow-lg  p-6 relative',prioritybgClass]">
    <!-- Left Color Bar with Conditional Priority -->
    <div 
      :class="[
        'absolute left-0 top-0 h-full w-11 rounded-l-xl flex items-center justify-center',
        priorityClass
      ]"
    ></div>

    <div class="flex items-center ml-12 h-full">
      <input type="checkbox" class="mr-2" />
      <div class="flex flex-col ml-5 items-start">
        <h1 class="text-xl font-bold text-gray-800">{{ task.title }}</h1>
        <p>{{ task.description }}</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "CardOne",
  props: {
    task: {
      type: Object,
      required: true,
    },
  },
  computed: {
    priorityClass() {
      switch (this.task.priority) {
        case 1:
          return "bg-red-500"; // Important
        case 2:
          return "bg-yellow-400"; // Average
        case 3:
          return "bg-green-400"; // Not-so-important
        default:
          return "bg-gray-300"; // Default fallback
      }
    },
    prioritybgClass(){
      switch(this.task.priority){
        case 1:
          return "bg-red-200";
          case 2:
            return "bg-yellow-200";
            case 3:
              return "bg-green-200";
              default:
                return "bg-white"

      }
    }
  },
};
</script>

<style scoped>
/* Add any custom styles if needed */
</style>
