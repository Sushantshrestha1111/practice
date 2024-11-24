
<template>
<div class="flex flex-row w-full">
  <!-- Left Sidebar -->
  <div class="sm:hidden md:block flex-[2] p-2">
    <Left />
  </div>

  <!-- Center Content -->
  <div class="flex-[4] p-2">
    <Center />
  </div>

  <!-- Right Sidebar -->
  <div class="flex-[2] mt-5 pr-5">
    <Right />
  </div>
</div>



<span></span>
</template>

<script setup>
import Center from 'src/components/mainPageComponents/Center.vue';
import Left from 'src/components/mainPageComponents/Left.vue';
import Right from 'src/components/mainPageComponents/Right.vue';
import MainLayout from 'src/layouts/MainLayout.vue';
// import MainLayout from 'src/layouts/MainLayout.vue';
defineOptions({
  name: 'IndexPage'
});
</script>
