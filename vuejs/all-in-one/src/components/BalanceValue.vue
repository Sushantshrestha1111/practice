<template>
  <h4>Your Balance</h4>
  <h1 id="balance">Rs{{ total }}</h1>
</template>

<script setup>
import { defineProps} from 'vue';
 defineProps({
  total:{
    type:Number,
    required:true
  }
 })
</script>
