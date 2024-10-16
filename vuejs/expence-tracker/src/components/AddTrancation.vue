<template>
  <h3>Add new transaction</h3>
  <form id="form" @submit.prevent="onSubmit">
    <div class="form-control">
      <label for="text">Text</label>
      <input
        type="text"
        id="text"
        placeholder="Enter text..."
        v-model="text"
      />
    </div>
    <div class="form-control">
      <label for="amount">
        Amount <br />
        (negative - expense, positive - income)
      </label>
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
import { ref, defineEmits } from 'vue'; // Make sure defineEmits is imported.

const emit = defineEmits(['transactionSubmitted']);
const toast = useToast();

const text = ref('');
const amount = ref('');

const onSubmit = () => {
  if (!text.value || !amount.value) {
    toast.error('Both fields are required.');
    return;
  }

  const transactionData = {
    text: text.value,
    amount: parseFloat(amount.value),
  };

  emit('transactionSubmitted', transactionData); // Emit the event.

  // Clear input fields after submission.
  text.value = '';
  amount.value = '';
};
</script>
