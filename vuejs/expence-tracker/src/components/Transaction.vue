<template>
    <h3>History</h3>
    <ul id="list" class="list">
      <li
      v-for="transaction in transactions"
      :key="transaction.id"
      :class="transaction.amount <0 ? 'minus' :'plus'"
      >
       {{ transaction.text }}
       <span>{{ transaction.amount }}</span>
        ><button class="delete-btn" >
          x
        </button>
      </li>
    </ul>
  </template>
  
<script>
export default {
  name: "TransactionList",
  data() {
    return {
      transactions: [
        { id: 1, text: "Food", amount: 200 },
        { id: 2, text: "Fuel", amount: 300 },
        { id: 3, text: "Bulb",amount:-5 },
        { id: 4, text: "lights",amount:150 },
        { id: 5, text: "Fruit", amount: 100 },
      ],
    };
  },
};
</script>
