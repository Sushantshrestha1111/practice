<template>
  <div>
    <Header></Header>
    <Balance :total="total" />
  </div>
  <div class="container">
    <IncomeExpence :income="+income" :expense="+expence" />
    <TransactionList
      :transactions="transactions"
      @transactionDeleted="handleTransactionDeleted"
    />
    <AddTrancation @transactionSubmitted="handleTransaction" />
  </div>
</template>

<script setup>
import AddTrancation from './components/AddTrancation.vue';
import Balance from './components/BalanceValue.vue';
import Header from './components/Header.vue';
import IncomeExpence from './components/IncomeExpence.vue';
import TransactionList from './components/TransactionList.vue';
import { useToast } from 'vue-toastification';
import { ref, computed, onMounted } from 'vue';

const toast = useToast();
const transactions = ref([]);

// Load transactions from localStorage when the component mounts
onMounted(() => {
  const savedTransactions = JSON.parse(localStorage.getItem('transactions')); // Corrected key
  if (savedTransactions) {
    transactions.value = savedTransactions;
  }
});

// Get total
const total = computed(() =>
  transactions.value.reduce((acc, transaction) => acc + transaction.amount, 0)
);

// Get income
const income = computed(() =>
  transactions.value
    .filter((transaction) => transaction.amount > 0)
    .reduce((acc, transaction) => acc + transaction.amount, 0)
    .toFixed(2)
);

// Get expense
const expence = computed(() =>
  transactions.value
    .filter((transaction) => transaction.amount < 0)
    .reduce((acc, transaction) => acc + transaction.amount, 0)
    .toFixed(2)
);

// Handle new transaction submission
const handleTransaction = (transactionData) => {
  transactions.value.push({
    id: generateId(),
    text: transactionData.text,
    amount: transactionData.amount,
  });

  saveToLocalStorage();
  toast.success("Added Successfully");
};

// Generate unique ID
const generateId = () => Math.floor(Math.random() * 1000);

// Handle transaction deletion
const handleTransactionDeleted = (id) => {
  transactions.value = transactions.value.filter(
    (transaction) => transaction.id !== id
  );
  saveToLocalStorage();
  toast.success("Transaction Deleted Successfully");
};

// Save transactions to localStorage
const saveToLocalStorage = () => {
  localStorage.setItem("transactions", JSON.stringify(transactions.value));
};
</script>
