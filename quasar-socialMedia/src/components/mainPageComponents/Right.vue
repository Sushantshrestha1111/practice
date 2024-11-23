<template>
    <div>
        <span>This is the right side</span>
        <q-card class="my-card">
      <q-card-section>
        <div class="p-2">
            <UserCard/>
            <UserCard/>
            <UserCard/>
        </div>
      </q-card-section>
    </q-card>
        
    </div>
</template>
<script setup>
import UserCard from "../UserCard.vue"

</script>
<style>
    
</style>