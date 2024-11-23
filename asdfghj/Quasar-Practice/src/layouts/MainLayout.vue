<template>
  <q-layout view="hHh lpR fFf">
    <!-- Header -->
    <q-header >
     <div class="flex">
      <div class="bg-red">this is logo part</div>
      <div class="bg-green">this is search part</div>
      <div>this is icon part</div>
     </div>
    </q-header>

    <!-- Drawer (optional sidebar) -->
    <q-drawer show-if-above>
      <p>Sidebar Content</p>
    </q-drawer>

    <!-- Main Content Area -->
    <q-page-container>
      <router-view /> <!-- Dynamically loads the current page -->
    </q-page-container>

    <!-- Footer -->
    <q-footer elevated>
      <span>footer</span>
    </q-footer>
  </q-layout>
</template>

<script setup>

</script>
