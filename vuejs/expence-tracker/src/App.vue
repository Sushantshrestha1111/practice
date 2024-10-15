<template>
 <div>
  <Header></Header>
  <Balance :total="total"/>
 </div>
 <div class="container">

  <IncomeExpence :income="income" :expense="expence"/>
  <TransactionList :transactions="transactions"/>
  <AddTrancation/>
  
 </div>
  
</template>

<script setup>
import AddTrancation from './components/AddTrancation.vue';
import Balance from './components/BalanceValue.vue';
import Header from './components/Header.vue';
import IncomeExpence from './components/IncomeExpence.vue';
import TransactionList from './components/TransactionList.vue';

import {ref,computed} from 'vue'
const transactions=ref(
   [
        { id: 1, text: "Food", amount: 200 },
        { id: 2, text: "Fuel", amount: 300 },
        { id: 3, text: "Bulb",amount:-50 },
        { id: 4, text: "lights",amount:150 },
        { id: 5, text: "Fruit", amount: 100 },
        
      ]
);

// Get total
const total = computed(() => {
  return transactions.value.reduce((acc, transaction) => {
    return acc + transaction.amount;
  }, 0);
});

const income =computed(()=>{
  return transactions.value
  .filter((transaction)=>transaction.amount > 0)
  .reduce((acc,transaction)=>{
    return acc+ transaction.amount;
  },0).toFixed(2);
});

const expence =computed(()=>{
  return transactions.value
  .filter((transaction)=>transaction.amount < 0)
  .reduce((acc,transaction)=>{
    return acc+ transaction.amount;
  },0).toFixed(2);
});


</script>


