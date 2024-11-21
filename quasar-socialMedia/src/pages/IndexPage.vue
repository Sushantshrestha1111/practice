
<template>

<q-card class="my-card">
      <q-card-section>
        {{ lorem }} this is the card
      </q-card-section>
    </q-card>
<span></span>
</template>

<script setup>
import MainLayout from 'src/layouts/MainLayout.vue';
// import MainLayout from 'src/layouts/MainLayout.vue';
defineOptions({
  name: 'IndexPage'
});
</script>
