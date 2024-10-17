<template>
    <div class="inc-exp-container">
      <div>
        <h4>Income</h4>
        <p id="money-plus" class="money plus">+Rs{{income}}</p>
      </div>
      <div>
        <h4>Expense</h4>
        <p id="money-minus" class="money minus"> -rs {{ Math.abs(expense) }}</p>
      </div>
    </div>
  </template>
  
<script setup>
import { defineProps } from 'vue';

 defineProps({
  income:{
    type:Number,
    required:true,
  },
  expense:{
    type:Number,
    required:true


  }
})


</script>
<style >
    
</style>