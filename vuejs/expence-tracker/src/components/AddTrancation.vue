<template>
    <h3>Add new transaction</h3>
    <form id="form" @submit.prevent="onSubmit">
      <div class="form-control">
        <label for="text">Text</label>
        <input type="text" id="text" placeholder="Enter text..." v-model="text" />
      </div>
      <div class="form-control">
        <label for="amount"
          >Amount <br />
          (negative - expense, positive - income)</label
        >
        <input
          type="text"
          id="amount"
          placeholder="Enter amount..."
          v-model="amount"
        />
      </div>
      <button class="btn">Add transaction</button>
    </form>
  </template>
<script setup>
import { useToast } from 'vue-toastification';
import {ref} from 'vue'

const text=ref('')
const amount=ref('')


const tost=useToast
const onSubmit=()=>{
  if(!text.value ||!amount.value){
    tost.error('both field null');
    return;
  }
  console.log("button pressed")
  text.value=""
  amount.value=""
}

</script>
